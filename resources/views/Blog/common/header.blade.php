<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  {{-- logo --}}
  <a class="navbar-brand" href="{{url('blog')}}">Blog</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- 回到頁首 --}}
      <li class="nav-item active">
        <a class="nav-link" href="{{url('blog')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      {{-- 類別路由 --}}
      <li class="nav-item">
      <a class="nav-link" href="{{url('blogabout')}}">About</a>
      </li>
    </ul>
  </div>

  {{-- 登入、註冊，已登入變登出 --}}
  {{-- <ul class="nav">
    @if (session()->has('blog'))
    @if(Auth::check())
      
      <li>
      <span class="h3 text-white">123</span>
      </li>
      
      <li>
        <a href="{{url('blogquit')}}">
          <button type="button" class="btn btn-light">登出</button>
        </a> 
      </li>
      
    @else
      <li>
        <a href="{{url('bloglogin')}}">
          <button type="button" class="btn btn-light">登入</button>
        </a> 
      </li>
      <li class="px-2">
        <a href="{{url('blogregister')}}">
          <button type="button" class="btn btn-light">加入會員</button>
        </a> 
      </li>
    @endif
    
  </ul> --}}

  {{-- RWD 漢堡按鈕 --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>