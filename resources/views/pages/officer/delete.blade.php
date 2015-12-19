@extends('layouts.default')

@section('content')
    <div id="form_container">
      <div id="title"><h2>Delete Officer</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        <p><h2>Are you sure you want to delete officer <em>{{$officer->last_name.','.$officer->first_name }}?</em></h2></p>
		<p><a href="/officers/delete/{{ $officer->id }}" class="button blue">Yes</a>   <a href="/officers" class="button blue">No </a> </p>
    </div> <!--End Form_Container -->
    <br><br>
@stop