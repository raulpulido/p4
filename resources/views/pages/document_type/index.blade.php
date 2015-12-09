@extends('layouts.default')
@section('content')
    <div id="form_container">
      <div id="title"><h2>Documents Type</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open() !!}
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            <div class="Htmltable animated  zoomIn">
				<table>
					<tr>
						<td>ID</td>
						<td>Document Name</td>
					</tr>
                @foreach($documents_type as $document)
					<tr>
						<td>{{ $document->id }}</td>
						<td>{{ $document->last_name }}</td>
						<td>
							<a href='{{ action('Document_TypeController@index',[$document->id]) }}' class="button blue">Edit</a>
						    <a href='/document_type/edit/{{$document->id}}' class="button blue">Delete</a>
						</td>
					</tr>
				@endforeach
				</table>
				<br><br>
				<div><a href='{{ action('Document_TypeController@create')}}' class="button grey">Create New officer</a></div>
				<br>
            </div> <!--End Htmltable Container -->
            <br>
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop