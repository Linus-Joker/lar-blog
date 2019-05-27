@extends('Blog/all')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-8">
      
      <h2>{{$data->article_title}}</h2>
      <figure>
      <img src="{{url($data->article_pic)}}" alt="p1">
      </figure>

      <div>
        {!!$data->article_description!!}
      </div>
      
    </div>

    <aside class="col-4">
      <div>
        <h3>最新文章</h3>
          <ul>
            @foreach ($items as $i)
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