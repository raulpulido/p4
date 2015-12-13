@extends('layouts.main')

@section('content')
  <div class="form_container_login">
    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>



    <form method='POST' action='/register'>
		@include('errors.list')
        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' name='name' id='name' value='{{ old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'>
        </div>

        <div class='form-group'>
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>

        <button type='submit' class='button blue'>Register</button>

    </form>
</div>
@stop