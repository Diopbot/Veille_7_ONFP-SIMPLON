<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Base de données MySQL</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = new mysqli($servername,$username, $password);

		if ($conn->connect_error) {
			die("Erreur : " . $conn->connect_errors);
		}
		echo 'Connexion réussie';

		//On ferme la connexion
		$conn->close();
	?>

</body>
</html>