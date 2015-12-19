@extends('layouts.default')

@section('content')
	<div id="form_container">
		<div id="title"><h2>Show Company</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($companies,['method' => 'HEAD', 'action' => ['CompanyController@edit', $companies->id]]) !!}
			@include('errors.list')
			<div class="form-group">
				{!! Form::label('company_name','Company Name:') !!}
				{!! Form::text('company_name',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('tax_id','Tax ID:') !!}
				{!! Form::text('tax_id',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('contact','Contact Name:') !!}
				{!! Form::text('contact',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Company email:') !!}
				{!! Form::text('email',null,['class' =>'form-control','readonly' => 'true']) !!}
			</div>
			<div class="form-group">
				<a href='/companies/{{$companies->id}}/edit' class="button blue">Edit</a>
				<a href='/companies/confirm-delete/{{ $companies->id}}'  class="button blue">Delete Company</a>
				<a href='/companies'  class="button blue">Back to Companies</a>
			</div>
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop