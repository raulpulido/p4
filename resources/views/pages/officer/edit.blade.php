@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Edit Officer</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($officers,['method' => 'PATCH', 'action' => ['OfficerController@update', $officers->id]]) !!}
			@include('errors.list')
			@include('pages.officer.form', ['submitButtonText'=>'Update Officer'])

        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop