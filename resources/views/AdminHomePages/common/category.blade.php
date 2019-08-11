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
      </h4>
      <hr>
      <table id="myDataTalbe" class="table display">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">文章標題</th>
              <th scope="col">建立時間</th>
              <th scope="col">操作</th>
            </tr>
          </thead>

          @foreach ($data as $item)
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
              
          @endforeach

        </table>

        {{ $data->links() }}
    </div>

  </div>
</div>

  <!--引用dataTables.js-->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>

$(function () {

  $("#myDataTalbe").DataTable({
    "serverSide": true,
    "lengthMenu": [ [5, 10, 20, -1], [5, 10, 20, "All"] ]
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