
<!DOCTYPE html>
<html>
<head>

	<title>User-generator</title>
	<meta charset='utf-8'>

</head>
<body>
	<h1> User-generator Result </h1>

		<?php 
		for ($i = 0; $i < $usersNumber; $i++){
			$user = Faker\Factory::create();
			echo $user->name ?> </br>
		<?php }; ?>
</body>
</html>
