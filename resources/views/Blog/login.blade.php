<!DOCTYPE html>
<html lang="en">

    <head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Blog_Interface</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/footer.css')}}">
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js'></script>
			
    </head>

    <body>
      @include('Blog.common.header_login_page')

      <div style="width:300px; margin:0 auto;" class="pt-3">
        <h2>blog 登入頁面</h2>
        <form action="bloglogin" method="post" class="mt-2">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label for="name">帳號:</label>  
            <input type="text" name="user_name" id="" placeholder="請輸入帳號">
          </div>
          <div class="form-group">
            <label for="password">密碼:</label>
            <input type="password" name="user_pass" id="" placeholder="請輸入密碼">
          </div>  
          <button type="submit">登入</button>
        </form>
        <a href="{{url('registed')}}">加入會員</a>
      </div>
          
      @include('Blog.common.footer')

    </body>

</html>