<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog_Interface</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js'></script> --}}
  <style>
    body{
      font-family: "Microsoft JhengHei", "PT Sans", Helvetica, Arial, sans-serif;
    }
  </style>

    <script src="{{asset('js/app.js')}}"></script>
    
  </head>

    <body>
      @include('Blog.common.larheader')

      @section('content')
      
      @show
          
      @include('Blog.common.footer')

    </body>

</html>