@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Add Officer</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('action' => ['OfficerController@store'])) !!}
			@include('errors.list')
			@include('pages.officer.form', ['submitButtonText'=>'Add Officer'])
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop