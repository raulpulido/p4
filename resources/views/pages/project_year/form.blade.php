

<div class="form-group">
	{!! Form::label('totalnjemployee','Total NJ Employees:') !!}
	{!! Form::text('whatever',null,['class' =>'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::label('TotalNJEmployees','Total NJ Employees:') !!}
	{!! Form::text('total_beip_employees',null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('TotalBEIPEmployees','Total BEIP Employees:') !!}
	{!! Form::text('total_terminations',null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText,['class' =>'button grey']) !!}
	<a href='/companies' class="button grey">Back to Companies</a>
</div>