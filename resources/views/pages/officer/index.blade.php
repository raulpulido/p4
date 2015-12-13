@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Officers</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open() !!}
			@include('errors.list')
            <div class="Htmltable animated  zoomIn">
				<table>
					<tr>
						<td>Last Name</td>
						<td>First Name</td>
						<td>E-mail </td>
					</tr>
                @foreach($officers as $officer)
					<tr>
						<td>{{ $officer->last_name }}</td>
						<td>{{ $officer->first_name }}</td>
						<td>{{ $officer->email }}</td>
						<td>
							<a href='{{ action('OfficerController@edit',[$officer->id]) }}' class="button blue">Edit</a>
						    <a href='/companies/edit/{{$officer->id}}' class="button blue">Delete</a>
						</td>
					</tr>
				@endforeach
				</table>
				<br><br>
				<div><a href='{{ action('OfficerController@create')}}' class="button grey">Create New officer</a></div>
				<br>
            </div> <!--End Htmltable Container -->
            <br>
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop