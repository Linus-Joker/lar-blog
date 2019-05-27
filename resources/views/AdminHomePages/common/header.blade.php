<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  {{-- logo --}}
  <a class="navbar-brand" href="#">後台管理介面</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- 回到頁首 --}}
      <li class="nav-item active">
        <a class="nav-link" href="{{url('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      {{-- 類別路由 --}}
      <li class="nav-item">
      <a class="nav-link" href="{{url('category')}}">Category</a>
      </li>

    </ul>
  </div>

  {{-- 登出 --}}
  <ul class="nav">
    <li>
    <a href="{{url('quit')}}">
      <button type="button" class="btn-primary">登出</button>
    </a> 
    </li>
  </ul>

  {{-- RWD 漢堡按鈕 --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

</nav>