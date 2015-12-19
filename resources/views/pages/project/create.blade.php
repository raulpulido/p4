@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Add Project</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('action' => ['ProjectController@store'])) !!}
			@include('errors.list')
			@include('pages.project.form', ['submitButtonText'=>'Save Project'])
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop