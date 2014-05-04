@extends('layouts.master')

@section('output')
{{ Form::open(array('class' => "form-horizontal", 'action' => 'SessionController@store')) }}
	<fieldset>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<legend>
					Login
				</legend>
			</div>
		</div>
		<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">

						<div class="form-group">
							{{ Form::text('email', null, array('class'=> 'form-control', 'placeholder' => 'Email')) }}
						</div>

						<div class="form-group">
							{{ Form::password('password', array('class'=> 'form-control', 'placeholder' => 'Password')) }}
						</div>

						<div class="form-group">
							{{ Form::submit('Login', array('class' => 'btn btn-info')) }}
						</div>

				</div>
			</div>
	</fieldset>
{{ Form::close() }}
@endsection