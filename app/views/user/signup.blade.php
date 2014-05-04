@extends('layouts.master')

@section('output')
	{{ Form::open(array('class' => "form-horizontal", 'action' => 'UserController@store')) }}
		<fieldset>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<legend>
						Signup
					</legend>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">

						<div class="form-group">
							{{ Form::text('name', '', array('class'=> 'form-control', 'placeholder' => 'Name')) }}
						</div>

						<div class="form-group">
							{{ Form::text('email', '', array('class'=> 'form-control', 'placeholder' => 'Email')) }}
						</div>	

						<div class="form-group">
							{{ Form::text('username', '', array('class'=> 'form-control', 'placeholder' => 'Username')) }}
						</div>	

						<div class="form-group">
							{{ Form::password('password', array('class'=> 'form-control', 'placeholder' => 'Password')) }}
						</div>

						<div class="form-group">
							{{ Form::password('password_confirmation', 
								array('class'=> 'form-control', 'placeholder' => 'Password Confirmation')) }}
						</div>

						<div class="form-group">
							{{ Form::submit('Signup', array('class' => 'btn btn-info')) }}
						</div>

				</div>
			</div>
		</fieldset>
	{{ Form::close() }}
@endsection