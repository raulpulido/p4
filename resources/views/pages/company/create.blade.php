@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Add New Company</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open(array('action' => ['CompanyController@store'])) !!}
			@include('errors.list')
			@include('pages.company.form', ['submitButtonText'=>'Save Company'])
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop