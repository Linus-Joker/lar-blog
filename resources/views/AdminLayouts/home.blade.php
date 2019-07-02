@extends('AdminLayouts/all')

@section('content')

<div style="width:300px; margin:0 auto;" class="pt-3">
  <form action="logins" method="post">
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

  {!! Captcha::display() !!}
  <a href="{{url('registed')}}">加入會員</a>
</div>
    
@endsection