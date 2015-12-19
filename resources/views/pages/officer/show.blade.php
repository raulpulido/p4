@extends('layouts.default')

@section('content')
	<div id="form_container">
		<div id="title"><h2>Show Company</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($officers,['method' => 'HEAD', 'action' => ['OfficerController@edit', $officers->id]]) !!}
			<div class="form-group">
				{!! Form::label('first_name','First Name:') !!}
				{!! Form::text('first_name',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('last_name','Last Name:') !!}
				{!! Form::text('last_name',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','E-mail:') !!}
				{!! Form::text('email',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				<a href='/officers/{{$officers->id}}/edit' class="button blue">Edit</a>
				<a href='/officers/confirm-delete/{{ $officers->id}}'  class="button blue">Delete</a>
				<a href='/officers'  class="button blue">Back to Officers</a>
			</div>
			
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop