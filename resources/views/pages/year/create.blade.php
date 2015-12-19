@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Add Year</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('action' => ['YearController@store'])) !!}
			@include('errors.list')
			@include('pages.year.form', ['submitButtonText'=>'Save Year'])
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop