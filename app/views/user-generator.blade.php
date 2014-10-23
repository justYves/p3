
<!DOCTYPE html>
<html>
<head>

	<title>User-Generator</title>
	<meta charset='utf-8'>

</head>
<body>
	<h1> User-Generator </h1>


	{{ Form::open(array('url' => '/user-generator', 'method' => 'POST')) }}

		{{ Form::label('number','Paragraphs') }}
		
		{{ Form::text('number'); }}

		{{ Form::submit('Generate'); }}

	{{ Form::close() }}
	
	
</body>
</html>
