@extends('layouts.default')


@section('content')
    <div id="form_container">
			
      	<div id="title"><h2>Projects</h2></div>
    </div>
    <div id="form_container"> <!-- Begin Form_Container -->
        {!! Form::open() !!}
            <div class="Htmltable animated  zoomIn">
				@foreach($companies as $company)
					<div id="title"><h3>{{ $company->company_name }}</h3></div>
				<div id="title"><h3>{!! Form::select('id', $officers) !!}</h3></div>
				@endforeach
				<table>
					<tr>
						<td>Project Number</td>
						<td>NEC</td>
						<td>Award</td>
						<td>Officer ID</td>
					</tr>
					
                @foreach($projects as $project)
					<tr>
						<td>{{ $project->id }}</td>
						<td>{{ $project->new_employment_commit }}</td>
						<td>{{ $project->award_percent }}</td>
						<td>{{ $project->officer_id }}</td>
						<td>
							<a href='/projectie/edit/{{$project->id}}' class="button blue">Edit Project</a>
							<a href='/projectie/edit/{{$project->id}}' class="button blue">Delete Project</a>
						</td>
						
					</tr>
					
				@endforeach
				</table>
				<br><br>
				<div><a href='/companies/edit/{{$company->id}}' class="button grey">Create New Project</a></div>
				<br>
            </div> <!--End Htmltable Container -->
            <br>
        </div> <!--End of Right Col -->
        <!--</form> -->
        {!! Form::close() !!}
    </div> <!--End Form_Container -->
    <br><br>
@stop