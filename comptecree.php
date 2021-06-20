<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="comptecree.css">
	<title>Confirmation</title>
</head>
<body>
	<header>
		<h3>Bienvenue à vous, <?php echo $_SESSION['pseudo']; ?>. Votre compte a été crée avec succès! Tu passeras un agréable moment chez nous! ^^  </h3>
		<br>
		<a href="#">Cliquez ici pour continuer</a>
	</header>
	<section></section>
</body>
</html>