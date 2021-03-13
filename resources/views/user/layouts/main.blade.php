<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Template</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/media.css')}}">
</head>
<body class="{{$class}}">
	@include('user.partials.header')
	@yield('slider')
	@include('user.partials.navbar')
	@yield('content')
	@include('user.partials.footer')
	@include('user.partials.success_modal')
	
	<script src="/js/jquery.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/lightbox.js"></script>
	<script src="/js/main.js"></script>
	@if(session()->has('success'))
		<script>
			$('#success').modal('show');
		</script>
	@endif
</body>
</html>