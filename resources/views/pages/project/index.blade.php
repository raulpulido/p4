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
				@endforeach
				<table>
					<tr>
						<td>Project Number</td>
						<td>NEC</td>
						<td>Award</td>
						<td>Officer</td>
					</tr>
					@foreach($projects as $project)
						<tr>
							<td>{{ $project->id }}</td>
							<td>{{ $project->new_employment_commit }}</td>
							<td>{{ $project->award_percent }}</td>
							<td>{{ $project->officer->last_name }}</td>
							<td>
								<a href='/projects/edit/{{$project->id}}'            class="button blue">Edit Project</a>
								<a href='/projects/confirm-delete/{{$project->id}}'  class="button blue">Delete</a>
							</td>
							<td>
								<a href='/project_year/show/{{$project->id}}' class="button blue">Annual Report</a>
							</td>
						</tr>
					@endforeach
				</table>
				<br><br>
				<div class="form-group">
					<a href='/projects/create/{{$company->id}}' class="button grey">New Project</a>
					<a href='/companies' class="button grey">Back to Companies</a>
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