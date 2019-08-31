@extends('AdminHomePages/all')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{url('index')}}">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Category</li>
    </ol>
</nav>

<div class="container-fluid">
  <div class="row" style="min-height:600px;">
    <aside class="col-2 col-sm-2">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <a href="{{url('category')}}"> Category</a>
        </li>
        <li class="list-group-item">-------------------</li>
        <li class="list-group-item">-------------------</li>
        <li class="list-group-item">-------------------</li>
      </ul>
    </aside>

    <div class="col-10 col-sm-10">
        {{ csrf_field() }}

    <h4 class="text-primary">
        <i class="fas fa-plus"></i>
        <a href="{{url('category/create')}}">新增文章</a>
    </h4>
    <hr>
    <table id="" class="table table-striped display js-basic-example">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">article-title</th>
            <th scope="col">article-time</th>
            <th scope="col">操作</th>
            </tr>
        </thead>

        {{-- <button type="button" class="aa">123</button> --}}

            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->article_id}}</th>
                    <td>{{$item->article_title}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                    <a class="mx-2" href="{{ url('categoryList/sort/') }}/1/{{ $item->article_id }}">向上排序</a>
                    <a class="mx-2" href="{{ url('categoryList/sort/') }}/2/{{ $item->article_id }}">向下排序</a>
                    <a class="mx-2" href="{{url('category/'.$item->article_id.'/edit')}}">修改</a>
                    <a class="mx-2" href="javascript:;" onclick="del({{$item->article_id}})">刪除</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    </div>
</div>

<!--引用dataTables.js-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function() {

    datatable = $('.js-basic-example').DataTable({
        pageLength: 5,
        responsive: true,
        ordering: false,
        "order": [
            [1, 'asc']
        ],
        lengthMenu: [
            [5, 25, 50, -1],
            [5, 25, 50, "All"]
        ],
        language: {
            "processing": "處理中...",
            "loadingRecords": "載入中...",
            "lengthMenu": "顯示 _MENU_ 項結果",
            "zeroRecords": "沒有符合的結果",
            "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
            "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
            "infoFiltered": "(從 _MAX_ 項結果中過濾)",
            "infoPostFix": "",
            "search": "搜尋:",
            "paginate": {
                "first": "第一頁",
                "previous": "上一頁",
                "next": "下一頁",
                "last": "最後一頁"
            },
            "aria": {
                "sortAscending": ": 升冪排列",
                "sortDescending": ": 降冪排列"
            }
        }
    });

});

//jq-end
  function del(id){
    let r = confirm('是否刪除此文章??');
    if(r==true){
      $.post({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        url:'category/' + id,
        type:'delete',
        success:function(data){
          if(data.status == 0){
            location.href = location.href;
            alert(data.msg);
          }else{
            alert(data.msg);
          }
        }
      });
    }else{
      alert('取消刪除!!');
    }
  }
</script>

@endsection
