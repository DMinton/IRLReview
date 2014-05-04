<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>IRL Review</title>

		<link href="{{ asset('assets/stylesheets/bootstrap-theme.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/stylesheets/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/stylesheets/stylesheet.css') }}" rel="stylesheet">
		
    	<script src="{{ asset('assets/javascripts/1.11.0.min.js') }}" ></script>
    	<script src="{{ asset('assets/javascripts/bootstrap.min.js') }}" ></script>

	</head>
	<body>
		<div class="container">

			<div class="header">
				@include('layouts._nav')
			</div>

			@include('layouts._errors')
			
			<div class="output">
				@yield('output')
			</div>

			<div class="footer">
				@include('layouts._footer')
			</div>
			
		</div>
	</body>
</html>