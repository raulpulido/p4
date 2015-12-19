@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Years</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
     <!--   {!! Form::open() !!} -->
			@include('errors.list')
            <div class="Htmltable animated  zoomIn">
				<table>
					<tr>
						<td>Year</td>
						<td>CPI</td>
					</tr>
					@foreach($years as $year)
						<tr>
							<td>{{ $year->year }}</td>
							<td>{{ $year->cpi  }}</td>
							<td>
								<a href='/years/{{$year->id}}/edit' class="button blue">Edit</a>
								<a href='/years/confirm-delete/{{ $year->id}}'  class="button blue">Delete </a>
							</td>
						</tr>
					@endforeach
				</table>
				<br><br>
				<div><a href='{{ action('YearController@create')}}' class="button grey">Create New Year</a></div>
				<br>
            </div> <!--End Htmltable Container -->
            <br>
    <!--    {!! Form::close() !!} -->
    </div> <!--End Form_Container -->
    <br><br>
@stop