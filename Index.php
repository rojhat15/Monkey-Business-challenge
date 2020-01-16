<?php

//Opdracht 2
 
    $apen[] = "Baviaan";
    $apen[] = "Guereza";
    $apen[] = "Langoer";
    $apen[] = "Tamarin";
    $apen[] = "Neusaap";
    $apen[] = "Halfaap";
    $apen[] = "Mandril";
    $apen[] = "Oeakari";
    $apen[] = "Faunaap";
    $apen[] = "Hoelman";
    $apen[] = "Meerkat";
    $apen[] = "Oormaki";
    $apen[] = "Gorilla";
    $apen[] = "Kuifaap";
    $apen[] = "Mensaap";
    $apen[] = "Spinaap";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Monkey Business</title>
		<link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
		<style>
			body{
				font-family: Arial;
				text-align: center;
			} 
				
			p{
				font-family: 'Bangers', cursive;
				color: #ff8400;
				font-size: 30px;
			}
		</style>
	</head>
	
	<body>
		<img src="images/monkey-business.jpg" alt="monkey business">
		
		<h1>select your monkey!</h1>
		
		<img src="images/monkey_swings.png" alt="monkey swings">
		
		<?php foreach($apen as $aap) { ?>
			<p><?= $aap; ?></p>
		<?php } ?>

	</body>
</html>