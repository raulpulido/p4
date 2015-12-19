			<div class="form-group">
				{!! Form::label('year','Year:') !!}
				{!! Form::text('year',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('cpi','CPI:') !!}
				{!! Form::text('cpi',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit($submitButtonText,['class' =>'button grey']) !!}
			</div>