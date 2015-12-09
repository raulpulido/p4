<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" type="text/css" />
	<div><img src="../img/iDMS-NJEDA-Logo.png" alt="logo" height="80" width="800"></div>
</head>
<body>
@if (Session::has('flash_message'))
	<div>{{ Session::get('flash_message')}}</div>
@endif
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
		<!-- Scripts -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>