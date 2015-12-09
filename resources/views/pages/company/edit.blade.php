@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Edit Company</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($companies,['method' => 'PATCH', 'action' => ['CompanyController@update', $companies->id]]) !!}
			@include('errors.list')
			@include('pages.company.form', ['submitButtonText'=>'Update Company'])

        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop