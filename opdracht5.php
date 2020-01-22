<?php

$user = "root";
$pass = "Mypass";


try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=apen', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if(isset($_GET['idleefgebied'])){
//$sql = "INSERT INTO leefgebied (idleefgebied, omschrijving) VALUES (".$_GET['idleefgebied'].",'".$_GET['omschrijving']."')";
$sql = "INSERT INTO leefgebied (idleefgebied, omschrijving) VALUES (:idleefgebied, :omschrijving)";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(":idleefgebied" => $_GET['idleefgebied'], ":omschrijving" => $_GET['omschrijving']));
}

$stmt = $dbh->prepare('SELECT * from leefgebied');
$stmt->execute();
$leefgebieden = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leefgebieden toevoegen</title>
</head>

<body>
<form>
	idleefgebied <input type="number" name="idleefgebied">
	omschrijving <input type="text" name="omschrijving">
	<input type="submit">
</form>
<ul>
	<?php foreach($leefgebieden as $leefgebied) { ?>
		<li><?= $leefgebied['omschrijving']; ?></li>
	<?php } ?>
</ul>


</body>
</html>	