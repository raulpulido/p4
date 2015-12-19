@extends('layouts.default')

@section('content')
    <div id="form_container">
      <div id="title"><h2>Delete Company</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        <p><h2>Are you sure you want to delete company <em>{{ $company->company_name }}?</em></h2></p>
		<p><a href="/companies/delete/{{ $company->id }}" class="button blue">Yes</a>   <a href="/companies" class="button blue">No </a> </p>
    </div> <!--End Form_Container -->
    <br><br>
@stop