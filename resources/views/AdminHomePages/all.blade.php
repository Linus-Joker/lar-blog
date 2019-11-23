<!DOCTYPE html>
<html lang="en">

    <head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<meta name="csrf-token" content="{{ csrf_token() }}">
			<title>Admin_Interface</title>
			<link rel="stylesheet" href="{{asset('css/app.css')}}">
			<link rel="stylesheet" href="{{asset('css/footer.css')}}">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			{{--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />  --}}

			<script src="{{asset('js/app.js')}}"></script>
			<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
			{{-- <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
			<script>tinymce.init({selector:'textarea'});</script> --}}

    </head>

    <body>
			@include('AdminHomePages.common.header')

			@section('content')

			@show

			@include('AdminHomePages.common.footer')

    </body>

</html>
