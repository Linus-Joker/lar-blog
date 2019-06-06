@extends('Blog/all')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="font-weight-bold mb-3">關於我</h1>
        <p>hi,我是Linus，這裡是我使用Laravel框架設計的部落格製作練習網站</p>
        <p>會記錄我學習的心得和筆記!!</p>
    </div>

    <aside class="col-md-4">
        <div>
          <h3 class="font-weight-bold mb-3">最新文章</h3>
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
@endsection