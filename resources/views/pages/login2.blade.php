@extends('layouts.main')

@section('content')

   
 <div class="form_container_logo">
	  <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

	<form method="post" action="index.html" class="login">
		<p>
		  <label for="login">Email:</label>
		  <input type="text" name="login" id="login" value="name@example.com">
		</p>

		<p>
		  <label for="password">Password:</label>
		  <input type="password" name="password" id="password" value="4815162342">
		</p>

		<p class="login-submit">
		  <button type="submit" class="login-button">Login</button>
		</p>

		<p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
	  </form>
</div>
@stop