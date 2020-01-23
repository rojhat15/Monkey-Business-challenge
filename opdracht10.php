<?php

$user = "root";
$pass = "Mypass";


try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=apen', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if(isset($_GET['soort'])) {
	$stmt = $dbh->prepare('SELECT * from aap a
                       join aap_has_leefgebied ahl on a.idaap = ahl.idaap
					   join leefgebied l on l.idleefgebied = ahl.idleefgebied
					   where soort = :soort');
	$stmt->execute([":soort" => $_GET['soort']]);
	$aap = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
}



?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leefgebieden toevoegen</title>
</head>

<body>
<form>
	zoek soort <input type="text" name="soort">
	<input type="submit">
</form>
<h3>Gevonden aap:</h3>
<input type="text" name="soort" value="<?= $aap[0]['soort'] ?>"><br>
<?php foreach($aap as $leefgebied) { ?>
	<input type="checkbox" name="leefgebied[]" value="<?= $leefgebied['idleefgebied'] ?>"><?= $leefgebied['omschrijving']?>
<?php } ?>








</body>
</html>	