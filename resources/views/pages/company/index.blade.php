@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Companies</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
     <!--   {!! Form::open() !!} -->
			@include('errors.list')
            <div class="Htmltable animated  zoomIn">
				<table>
					<tr>
						<td>Company ID</td>
						<td>Company Name</td>
						<td>Tax ID </td>
						<td>Contact</td>
					</tr>
					@foreach($companies as $company)
						<tr>
							<td>{{ $company->id }}</td>
							<td>{{ $company->company_name }}</td>
							<td>{{ $company->tax_id }}</td>
							<td>{{ $company->contact }}</td>
							<td>
								<a href='{{ action('CompanyController@show',[$company->id]) }}'  class="button blue">show Company</a>
								<a href='/companies/{{$company->id}}/edit' class="button blue">Edit Company</a>
								<a href='/companies/confirm-delete/{{ $company->id}}'  class="button blue">Delete </a>
							</td>
							<td>
								<a href='/projects/create/{{$company->id}}' class="button blue">New Project</a>
								<a href='/projects/show/{{$company->id}}'   class="button blue">Show Projects</a>
							</td>
						</tr>
					@endforeach
				</table>
				<br><br>
				<div><a href='{{ action('CompanyController@create')}}' class="button grey">Create New Company</a></div>
				<br>
            </div> <!--End Htmltable Container -->
            <br>
    <!--    {!! Form::close() !!} -->
    </div> <!--End Form_Container -->
    <br><br>
@stop