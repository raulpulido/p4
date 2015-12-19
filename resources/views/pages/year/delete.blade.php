@extends('layouts.default')

@section('content')
    <div id="form_container">
      <div id="title"><h2>Delete Year</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        <p><h2>Are you sure you want to delete year <em>{{ $year->year }}?</em></h2></p>
		<p><a href="/years/delete/{{ $year->id }}" class="button blue">Yes</a>   <a href="/years" class="button blue">No </a> </p>
    </div> <!--End Form_Container -->
    <br><br>
@stop