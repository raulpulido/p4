			<div class="form-group">
				{!! Form::label('company_name','Company Name:') !!}
				{!! Form::text('company_name',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('tax_id','Tax ID:') !!}
				{!! Form::text('tax_id',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('contact','Contact Name:') !!}
				{!! Form::text('contact',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Company email:') !!}
				{!! Form::text('email',null,['class' =>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit($submitButtonText,['class' =>'button grey']) !!}
			</div>