@extends('layouts.default')
@section('content')
    <div id="form_container  animated  zoomIn">
      <div id="title"><h2>Add Officer</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('route' => 'document_typestore')) !!}
		@include('errors.list')
			<div class="form-group">
				{!! Form::label('document_name','Document Name:') !!}
				{!! Form::text('document_name',null,['class' =>'form-control']) !!}
			</div>
		<div class="form-group">
				{!! Form::submit('Add Document Type',['class' =>'button grey']) !!}
				
			</div>
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop