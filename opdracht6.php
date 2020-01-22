<?php

$user = "root";
$pass = "Mypass";


try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=apen', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



$stmt = $dbh->prepare('SELECT * from aap a
                       join aap_has_leefgebied ahl on a.idaap = ahl.idaap
					   join leefgebied l on l.idleefgebied = ahl.idleefgebied');
$stmt->execute();
$apen = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leefgebieden toevoegen</title>
</head>

<body>

<ul>
	<?php foreach($apen as $aap) { ?>
		<li><?= $aap['soort']; ?> : <?= $aap['omschrijving']; ?></li>
	<?php } ?>
</ul>


</body>
</html>	


