@extends('layouts.default')

@section('content')
    <div id="form_container">
      <div id="title"><h2>Delete Project</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        <p><h2>Are you sure you want to delete Project <em>{{$project->id }}?</em></h2></p>
		<p><a href="/projects/delete/{{ $project->id }}" class="button blue">Yes</a>   <a href="/projects/show/{{$project->company_id}}" class="button blue">No </a> </p>
    </div> <!--End Form_Container -->
    <br><br>
@stop