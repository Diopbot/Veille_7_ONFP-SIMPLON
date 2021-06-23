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

		//On tente d'établir la connexion
		try{
			$conn = new PDO("mysql:localhost=$servername,dbname=php_db", $username, $password);

		//On définit le mode d'erreur de PDO sur Exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connexion réussie";
		}
		

		/*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
        catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }     
		

		//On ferme la connexion
		$conn = null;
	?>
</body>
</html>