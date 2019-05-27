@extends('AdminHomePages/all')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{url('index')}}">Home</a>
    </li>
    </ol>
</nav>

<div class="container-fluid">
  <div class="row" style="min-height:600px;">
    <aside class="col-2 col-sm-2">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <a href="{{url('category')}}"> Category</a>
        </li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
      </ul>
    </aside>

    <div class="col-10 col-sm-10">
      <iframe src="{{url('info')}}" frameborder="0" width="100%" height="100%"></iframe>
    </div>

  </div>
</div>
    
@endsection