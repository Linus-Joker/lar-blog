<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  {{-- logo --}}
<a class="navbar-brand" href="{{url('blog')}}">Blog</a>

   {{-- RWD 漢堡按鈕 --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      {{-- 回到頁首 --}}
      <li class="nav-item active">
        <a class="nav-link" href="{{url('blog')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      {{-- 類別路由 --}}
      <li class="nav-item">
        <a class="nav-link" href="javascript:;">About</a>
      </li>

    </ul>

  </div>

</nav>