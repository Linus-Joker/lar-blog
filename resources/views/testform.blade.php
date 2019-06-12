<!DOCTYPE html>
<html lang="en">

    <head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Blog_Interface</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
	  	<link rel="stylesheet" href="{{asset('css/footer.css')}}">
      {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js'></script> --}}
    <script src="{{asset('js/app.js')}}"></script>
			
    </head>

    <body>
      <form action="testfont" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="">帳號</label>
        <input type="text" name="name" id="">

        <div class="form-group">
          <label for="title">文章圖片:</label>
          <input type="file" name="pic" placeholder="請上傳圖片" size="6">
          {{-- <a href="{{url('uploaded')}}" class="btn btn-success">上傳</a> --}}
        </div>

        <img src="https://res.cloudinary.com/linus-li/image/upload/v1560328640/201906120837.jpg" alt="pp">

        <button type="submit">送出</button>
      </form>

    </body>

</html>