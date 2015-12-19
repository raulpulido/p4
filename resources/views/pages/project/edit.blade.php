@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Edit Project</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::model($project,['method' => 'PATCH', 'action' => ['ProjectController@update', $project->id]]) !!}
			@include('errors.list')
			@include('pages.project.form', ['submitButtonText'=>'Update Project'])

        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop