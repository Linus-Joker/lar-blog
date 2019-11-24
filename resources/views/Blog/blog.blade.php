@extends('Blog/all')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      @foreach ($data as $item)
        <h2>
          <a href="{{url('a/'. $item->article_id)}}" target="_blank">
            <b>{{$item->article_title}}</b>
          </a>
        </h2>
        <figure>
        {{-- <img src="{{asset('images/2019050608.jpg')}}" alt="p1"> --}}
        <a href="{{url('a/'. $item->article_id)}}" target="_blank">
          <img src="{{url($item->article_pic)}}" alt="p1" style="max-width:100%;">
        </a>
          {{-- <img src="https://picsum.photos/600/300" alt="p1"> --}}
        </figure>

        {{-- <p>{{date('Y-m-d',$item->created_at)}}</p> --}}
        <time>{{$item->created_at}}</time>
        <p>{!!$item->article_description!!}</p>
        <div class="text-right">
          <a href="{{url('a/'. $item->article_id)}}"      target="_blank" class="btn btn-outline-primary">
            Read more...
          </a>
        </div>
        <hr>
      @endforeach
      {{ $data->links() }}
    </div>

    <aside class="col-md-4">
      <div>
        <h3 class="font-weight-bold mb-3">最新文章</h3>
        {{-- {{$items}} --}}
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


<script>

</script>
@endsection
