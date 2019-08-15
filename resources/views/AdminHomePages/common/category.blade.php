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

        {{-- 顯示<select name="count" id="">
          <option value="2">2</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="8">8</option>
        </select> --}}

      <h4 class="text-primary">
        <i class="fas fa-plus"></i>
        <a href="{{url('category/create')}}">新增文章</a>
        <input type="radio" name="r1" value="1">
        <input type="radio" name="r1" value="3">
      </h4>
      <hr>
      <table id="example" class="display">
          <thead>
            <tr>
              {{-- <th scope="col">#</th> --}}
              <th scope="col">article_id</th>
              <th scope="col">article_title</th>
              {{-- <th scope="col">操作</th> --}}
            </tr>
          </thead>

          {{-- <button type="button" class="aa">123</button> --}}

        {{-- @foreach ($data as $item)
            <tbody>
            <tr>
                <th scope="row">{{$item->article_id}}</th>
                <td>{{$item->article_title}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                <a href="{{url('category/'.$item->article_id.'/edit')}}">修改</a>
                <a href="javascript:;" onclick="del({{$item->article_id}})">刪除</a>
            </tr>
            </tbody>

        @endforeach --}}

        </table>

    </div>

  </div>
</div>

  <!--引用dataTables.js-->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function() {
    $('input[name="r1"]').click(function(){
        var id = $('input[name="r1"]:checked').val();
        alert(id);

        $('#example').DataTable({
        "lengthMenu": [5, 10, 20, 100,],
        "processing": true,
        "serverSide": true,
        // "ajax": "categoryOrder",
        "ajax": {
            "url": "{{ route('api.order') }}",
            "data":{
                "id":id
            }
        },


        "columns": [
            { "data": "article_id" },
            { "data": "article_title" },
        ]
        });

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
