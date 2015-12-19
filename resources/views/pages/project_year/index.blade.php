@extends('layouts.default')
@section('content')
    <div id="form_container">
      	<div id="title"><h2>Annual Reports</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open() !!}
            <div class="Htmltable animated  zoomIn">
				<div id="title"><h3>{{ $companyname }}</h3></div>
				<div class="form-group">
					<h3><td>Project Number:</td>
					<td>{{ $projectid }}</td>	</h3>
				</div>
				<table>
					<tr>
						<td>Year</td>
					</tr>
					@foreach($projects->years as $year)
						<tr>
							<td>{{ $year->year }}</td>
						</tr>
					@endforeach
				</table>
				<br><br>
				<div class="form-group">
					<a href='/projects/show/{{$projects->company->id}}' class="button grey">Back to projects</a>
				</div>	
				<br>
            </div> <!--End Htmltable Container -->
            <br>
        </div> <!--End of Right Col -->
        <!--</form> -->
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop