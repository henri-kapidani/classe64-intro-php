<?php
	// definiamo una variabile
	$somma = 5 + 6;
	$name = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="" method="get">
		<label for="name">Nome</label>
		<input type="text" name="name" id="name">
		<button>Salutami</button>
	</form>
	<h1>Ciao <?= $name ?></h1>
</body>
</html>