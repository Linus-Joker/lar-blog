<!DOCTYPE html>
<html lang="en">

    <head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Blog_Registed</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/footer.css')}}">
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js'></script>
			
    </head>

    <body>
      @include('Blog.common.header_login_page')

      <div style="width:300px; margin:0 auto;" class="pt-3">
        <h2>blog 註冊頁面</h2>
        <hr>
        @if (count($errors)>0)
          <div class="mark">
            @foreach ($errors->all() as $error)
              <p>{{$error}}</p> 
            @endforeach   
          </div>
        @endif
  
        <div class="mark">
          @if (session('msg'))
            <p>{{session('msg')}}</p>
          @endif
        </div>  

        <h2>加入會員</h2>

          <form action="" method="post">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="name">帳號:</label>
              <input type="text" name="name" id="" placeholder="請輸入帳號">
            </div>
            <div class="form-group">
              <label for="password">密碼:</label>
              <input type="password" name="password" id="" placeholder="請輸入密碼">
              <label for="">請輸入6-20位英文與數字</label>
            </div>
            <div class="form-group">
              <label for="password">確認密碼:</label>
              <input type="password" id="" placeholder="確認密碼">
              <label for="">再次輸入密碼</label>
            </div>
            <div class="form-group">
              <label for="phone">電話:</label>
              <input type="text" name="phone" id="" placeholder="請輸入電話號碼">
              <label for="">請輸入09開頭電話號碼</label>
            </div>
            <div class="form-group">
              <label for="mail">信箱:</label>
              <input type="email" name="mail" id="" placeholder="請輸入信子郵件">
            </div>
            性別:
            <input type="radio" name="gender" value="male" id="" checked />男
            <input type="radio" name="gender" value="female" id="" />女
            
            <button type="submit">確定送出</button>
          </form>
      </div>
          
      @include('Blog.common.footer')

    </body>

</html>