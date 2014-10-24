<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/united/bootstrap.min.css">

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
	        <h1 class="text-muted">Project 3</h1>
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
