
<!DOCTYPE html>
<html>
<head>

	<title>Lorem-Ipsum</title>
	<meta charset='utf-8'>

</head>
<body>
	<h1> Lorem-Ipsum </h1>

	{{ Form::open(array('url' => '/lorem-ipsum', 'method' => 'POST')) }}

		{{ Form::label('number','Paragraphs') }}
		
		{{ Form::text('number'); }}

		{{ Form::submit('Generate'); }}

	{{ Form::close() }}
	
</body>
</html>
