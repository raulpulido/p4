@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Edit Project</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
		
		@foreach($projects->years as $year)
		{!! Form::model($projects,['method' => 'PATCH', 'action' => ['ProjectController@update', $projects->id]]) !!}
        	@include('errors.list')
			@if ($year->pivot->year_id==$yearid)
				@include('pages.project_year.form', ['submitButtonText'=>'Update Annual Report'])
			@endif
		
        {!! Form::close() !!}
		@endforeach
    </div> <!--End Form_Container -->
    <br><br>
@stop