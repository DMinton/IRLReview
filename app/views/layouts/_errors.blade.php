@if($errors->first())
	<div class='row'>
		<div class='col-md-6 col-md-offset-3 text-center'>
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
					@foreach($errors->all() as $error)
						<li class=''>{{ $error }}</li>
					@endforeach
			</div>
		</div>
	</div>
@endif