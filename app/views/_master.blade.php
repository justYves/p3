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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Home</a>
          <a class="navbar-brand" href="/lorem-ipsum">Lorem Ipsum</a>
          <a class="navbar-brand" href="/user-generator">User Generator</a>
        </div>
      </div>
    </div>

	<div class="col-xs-12 col-sm-2">
	</div>

	<div class="col-xs-12 col-sm-8">
		<div class="jumbotron">
			<div class="container">
	        	@yield('content')
				@yield('body')
			</div>
	    </div>

		<div class="container">
			<div class="row">		
			 	@yield('result')
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-2">
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</body>
</html>
