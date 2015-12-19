@extends('layouts.default')

@section('content')
	<div id="form_container">
		<div id="title"><h2>Show Year</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($years,['method' => 'HEAD', 'action' => ['YearController@edit', $years->id]]) !!}
			@include('errors.list')
			<div class="form-group">
				{!! Form::label('year','Year:') !!}
				{!! Form::text('year',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			
			<div class="form-group">
				<a href='/years/{{$years->id}}/edit' class="button blue">Edit</a>
				<a href='/years/confirm-delete/{{ $years->id}}'  class="button blue">Delete</a>
				<a href='/years'  class="button blue">Back to Companies</a>
			</div>
			
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop