<!doctype html>
<html>
	

<head>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" type="text/css" />
	<title>iDMS Login Form</title>
  <!--	<link rel="stylesheet" href="css/login.css"> -->
	<div class='container_logo'><img src="../img/iDMS-NJEDA-Logo1.png" alt="logo" height="80" width="800"></div>
</head>
<body>
@if (Session::has('flash_message'))
	<div>{{ Session::get('flash_message')}}</div>
@endif
<div class="container">
	<div id="main" class="row">
			@include('flash::message')
		</div>

    <div id="main" class="row">

            @yield('content')

    </div>


</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script>
		$('div.alert').delay(6000).slideUp(600);
	</script>
</body>
</html>