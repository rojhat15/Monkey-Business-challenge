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
	$sql = "insert into aap (soort) values (:soort)";
	$stmt = $dbh->prepare($sql);
	$stmt->execute(["soort" => $_GET['soort']]);
}



?>  

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Aap toevoegen</title>
</head>

<body>
<form>
	voeg soort toe<input type="text" name="soort">
	<input type="submit">
</form>

</body>
</html>	