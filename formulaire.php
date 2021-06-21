<?php
	require "traitementformulaire.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<title>Formulaire</title>
</head>
<body>
	<section>
		<form action="" method="POST">
			<h1>Formulaire</h1>
			<div class="form top">
				<div class="underform left">
					<div class="form-item">
						<label for="nom" id="label1"><br></label>
						<input type="text" name="nom" placeholder="Nom" value="<?php if (isset($nom)){ echo $nom; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)" id="input1">
						<p><?php if (isset($message1)){ echo $message1; } else{ echo "<br>";} ?></p>
					</div>
					<div class="form-item">
						<label for="pseudo" id="label2"><br></label>
						<input type="text" name="pseudo" placeholder="Pseudo" value="<?php if (isset($pseudo)){ echo $pseudo; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)"id="input2">
						<p><?php if (isset($message3)){ echo $message3; } else{ echo "<br>";} ?></p>
					</div>
					<div class="form-item">
						<label for="telephone" id="label3"><br></label>
						<input type="text" name="telephone" placeholder="Telephone" value="<?php if (isset($telephone)){ echo $telephone; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)" id="input3">
					</div>
				</div>
				<div class="underform right">
					<div class="form-item">
						<label for="prenom" id="label4"><br></label>
						<input type="text" name="prenom" placeholder="Prenom" value="<?php if (isset($prenom)){ echo $prenom; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)" id="input4">
						<p><?php if (isset($message2)){ echo $message2; } else{ echo "<br>";} ?></p>
					</div>
					<div class="form-item">
						<label for="mdp" id="label5"><br></label>
						<input type="password" name="mdp" placeholder="Mot de passe" value="<?php if (isset($mdp)){ echo $mdp; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)" id="input5">
						<span><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="Changeeye()"></i></span>
						<p><?php if (isset($message4)){ echo $message4; } else{ echo "<br>";} ?></p>
					</div>
					<div class="form-item">
						<label for="adresse" id="label6"><br></label>
						<input type="text" name="adresse" placeholder="Adresse" value="<?php if (isset($adresse)){ echo $adresse; } ?>" onmouseenter="Placeholder(this.id)" onmouseleave="Backplaceholder(this.id)" id="input6">
					</div>
				</div>
			</div>
			<div class="form bottom">
				<input  class= "submit" type="submit" name="submit" value="S'inscrire">
			</div>
		</form>
	</section>




<script type="text/javascript" src="index.js"></script>


<script type="text/javascript">
	entrees = document.getElementsByTagName('input');
	labels = document.getElementsByTagName('label');
	if (input1.value != "") {
		label1.innerHTML = "Nom";
		console.log(label1);
	}
	if (input2.value != "") {
		label2.innerHTML = "Pseudo";
	}
	if (input3.value != "") {
		label3.innerHTML = "Telephone";
	}
	if (input4.value != "") {
		label4.innerHTML = "Prenom";
	}
	if (input5.value != "") {
		label5.innerHTML = "Mot de passe";
	}
	if (input6.value != "") {
		label6.innerHTML = "Adresse";
}
</script>



</body>
</html>