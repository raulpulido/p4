<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" type="text/css" />
	<div><img src="{{URL::asset('img/iDMS-NJEDA-Logo.png')}}" alt="logo" height="80" width="800"></div>
</head>
<body>
	<div class="container">
		<div  id="main" class="row">
			<header>@include('includes.header')</header>
		</div>
		<div id="main" class="row">
			@include('flash::message')
		</div>
		<div  id="main" class="row">
			@yield('content')
		</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

	</div>
	<!-- Scripts -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script>
		$('div.alert').delay(4000).slideUp(400);
	</script>
	@yield('footer')
</body>
</html>