@extends('AdminLayouts/all')

@section('content')
<div style="width:300px; margin:0 auto;" class="pt-3">
    <h2>加入會員</h2>
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
        
    <form action="" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">帳號:</label>
          <input type="text" name="username" id="" placeholder="請輸入帳號">
        </div>
        <div class="form-group">
          <label for="password">密碼:</label>
          <input type="password" name="userpassword" id="" placeholder="請輸入密碼">
          <label for="">請輸入3-20位英文與數字</label>
        </div>
        <div class="form-group">
          <label for="password">確認密碼:</label>
          <input type="password" name="userpassword_confirmation" id="" placeholder="確認密碼">
          <label for="">再次輸入密碼</label>
        </div>
        <div class="form-group">
          <label for="phone">電話:</label>
          <input type="text" name="userphone" id="" placeholder="請輸入電話號碼">
          <label for="">請輸入09開頭電話號碼</label>
        </div>
        <div class="form-group">
          <label for="mail">信箱:</label>
          <input type="email" name="usermail" id="" placeholder="請輸入信子郵件">
        </div>
        性別:
        <input type="radio" name="usergender" value="male" id="" checked />男
        <input type="radio" name="usergender" value="female" id="" />女
        
        <button type="submit">確定送出</button>
      </form>
  </div>
    
@endsection