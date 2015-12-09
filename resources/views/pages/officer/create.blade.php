@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Add Officer</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('route' => 'officerstore')) !!}
			@if (count($errors) > 0)
				<div class="message-alert-danger animated  zoomIn">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="form-group">
				{!! Form::label('first_name','First Name:') !!}
				{!! Form::text('first_name',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('last_name','Last Name:') !!}
				{!! Form::text('last_name',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','E-mail:') !!}
				{!! Form::text('email',null,['class' =>'form-control']) !!}
			</div>
		<div class="form-group">
				{!! Form::submit('Add Officer',['class' =>'button grey']) !!}
				
			</div>
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop