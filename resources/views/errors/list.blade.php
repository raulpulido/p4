@if (count($errors) > 0)
	<div class="message-alert-danger animated  zoomIn">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif