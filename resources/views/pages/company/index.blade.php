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
							<a href='/companies/{{$company->id}}/edit' class="button blue">Edit</a>
						<!--	<a href='{!! Form::open(['method' => 'DELETE','route' => ['companies.destroy', $company->id]]) !!}
            				{!! Form::submit('Delete this company?', ['class' => 'button blue']) !!}
        					{!! Form::close() !!}'  class="button blue">Delete Company</a>-->
									    
						</td>
						<td>
							<a href='/companies/edit/{{$company->id}}' class="button blue">Add Project</a>
							<a href='/projects/show/{{$company->id}}' class="button blue">Show Projects</a>
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