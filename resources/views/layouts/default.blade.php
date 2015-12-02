<!doctype html>
<html>
<head>
    @include('includes.head')
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
</body>
</html>