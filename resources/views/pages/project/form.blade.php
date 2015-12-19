<div class="form-group">
	{!! Form::label('company_name','Company Name:') !!}
	{!! Form::label('company_name',$companies->company_name) !!}
	{!! Form::hidden('company_id',$companies->id) !!}
	{!! Form::hidden('company_name',$companies->company_name) !!}
</div>
<div class="form-group">
	{!! Form::label('officer_drowdown','Officers:') !!}
	{!! Form::select('officer_id', $officers_for_dropdown) !!}
</div>
<div class="form-group">
	{!! Form::label('NEC','NEC:') !!}
	{!! Form::text('new_employment_commit',null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('award','Award:') !!}
	{!! Form::text('award_percent',null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('year_list','Annual Report:') !!}
	{!! Form::select('year_list[]',$yearslist,$project->getYearListAttribute()->all(),['class' =>'form-control','multiple']) !!}
	<!--$project->getYearListAttribute()->all()-->
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class' =>'button grey']) !!}
	<a href='/projects/show/{{$companies->id}}' class="button grey">Back to Projects</a>
</div>
