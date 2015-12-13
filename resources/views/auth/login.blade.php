@extends('layouts.main')

@section('content')

    <div class="form_container_login">
		<div><h1>Login</h1></div>

		
		<form method='POST' action='/login'>
			@include('errors.list')
			{!! csrf_field() !!}

			<div class='form-group'>
				<label for='email'>Email</label>
				<input type='text' name='email' id='email' value='{{ old('email') }}'>
			</div>

			<div class='form-group'>
				<label for='password'>Password</label>
				<input type='password' name='password' id='password' value='{{ old('password') }}'>
			</div>

			<div class='form-group'>
				<input type='checkbox' name='remember' id='remember'>
				<label for='remember' class='checkboxLabel'>Remember me</label>
			</div>
			
			<button type='submit' class='button blue'>Login</button>
			
			 <p>Don't have an account? <a href='/register'>Register here...</a></p>

		</form>
	</div>
@stop