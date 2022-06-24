<?php
	$nomi = 'Pinco,Pallino,Bo';
	$arr_nomi = explode(',', $nomi);

	$testo = 'ciao Lorem ipsum dolor lorem sit amet lorem consectetur adipisicing elit. Nostrum est quidem, exercitationem, quibusdam animi officiis quaerat nulla accusantium possimus voluptas deserunt. Facere asperiores adipisci quo harum voluptatum provident rem quibusdam!';
	$n_replacements = 0;
	$testo_replaced = str_replace('lorem', 'ciao', $testo, $n_replacements);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Array dei nomi</h1>
	<p><?php var_dump($arr_nomi); ?></p>

	<h1>Sostituzione testo</h1>
	<p><?= $testo_replaced ?></p>
	<p>Numero di sostituzioni: <?= $n_replacements ?></p>

	<h1>Lunghezza testo sostituito: <?= strlen($nomi) ?></h1>

	<h1>Posizione di lorem: <?= strpos($testo, 'lorem') ?></h1>

</body>
</html>