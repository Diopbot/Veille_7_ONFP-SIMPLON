<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Base de données MySQL</title>
</head>
<body>
		<h1>Base de données MySQL</h1>

		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";

		$conn = mysqli_connect($servername,$username, $password);

		if (!$conn){
			die("Erreur : " . mysqli_connect_error());
		}
		echo 'Connexion réussie';

		//On ferme la connexion
		mysqli_close($conn);
	?>
</body>
</html>