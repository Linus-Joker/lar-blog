@extends('AdminHomePages/all')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{url('index')}}">Home</a>
  </li>
  <li class="breadcrumb-item active" aria-current="page">修改文章</li>
  </ol>
</nav>

<section style="max-width:1000px; margin: 30px auto;">
  <form action="{{url('category/'.$data->article_id)}}" method="POST" enctype="multipart/form-data">
  {{-- <input type="hidden" name="_method" value="put">
     --}}
    {{ method_field('PUT') }}
      {{ csrf_field() }}
    
      <div class="form-group">
        <label for="title">文章標題:</label>
        <input type="text" name="title" id="" placeholder="請輸入標題" size="50" value="{{$data->article_title}}">
      </div>
      <div class="form-group">
        <label for="title">文章圖片:</label>
        <input type="file" name="pic" placeholder="請上傳圖片" size="6">
        {{-- <a href="{{url('uploaded')}}" class="btn btn-success">上傳</a> --}}
      </div>
      <figure>
        <img src="{{url($data->article_pic)}}" alt="p1" width="400px" height="200px">
      </figure>
    
      <div class="form-group">
        <label for="exampleFormControlTextarea1">文章內容</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content">{{$data->article_description}}</textarea>
      </div>
    
      <button type="submit" class="btn btn-primary">提交修改</button>
    </form>

</section>
    
@endsection