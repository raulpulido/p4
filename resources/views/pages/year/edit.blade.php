@extends('layouts.default')

@section('content')
    <div id="form_container">
      <div id="title"><h2>Edit Year</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($years,['method' => 'PATCH', 'action' => ['YearController@update', $years->id]]) !!}
			@include('errors.list')
			@include('pages.year.form', ['submitButtonText'=>'Update Year'])
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop