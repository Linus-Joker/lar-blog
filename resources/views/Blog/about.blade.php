@extends('Blog/all')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="font-weight-bold mt-5">關於我</h1>
        <p>hi，我是Linus，這是我使用Laravel框架設計的部落格製作練習網站~~</p>
        <p>目前有註冊、登入服務以及</p>
        <p>使用管理員的權限針對文章新增、編輯、刪除</p>
        <p>未來還會想更多的應用服務</p>
        <p>歡迎交流，希望能給予更多的建議事項，感謝你的觀看!!</p>

    </div>

    <aside class="col-md-4">
        <div>
          <h3 class="font-weight-bold mt-5">最新文章</h3>
          {{-- {{$items}} --}}
            <ul>
              @foreach ($key as $i)
              <a href="{{url('a/'. $i->article_id)}}" target="_blank">
                <li>{{$i->article_title}}</li>
              </a>
              <hr>
              @endforeach
            </ul>
        </div>
      </aside>

  </div>
</div>

<script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153154258-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153154258-1');
    </script>
</script>
@endsection
