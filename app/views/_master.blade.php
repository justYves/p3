<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	 <!-- Respond.js proxy on external server -->
	<link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
	<link href="respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
	<script src="respond.proxy.js"></script>


	<title>@yield('title','P3')</title>

	@yield('head')
	
</head>
<body>

  	<div class="container">

      	<div class="header">
	        <ul class="nav nav-pills pull-right">
		        <li class="active"><a href="/">Home</a></li>
		        <li><a href="/lorem-ipsum">Lorem Ipsum</a></li>
		        <li><a href="/user-generator">User Generator</a></li>
	        </ul>
	        <h2 class="text-muted">Project 3</h2>
      	</div>
      	<div class="jumbotron">
        	@yield('content')
			@yield('body')
  		</div>

		<div class="row">		
		 	@yield('result')
		</div>
	</div>


	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</body>
</html>
