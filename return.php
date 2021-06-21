<!DOCTYPE html>
<html>
<head>
	<title>cas d'utilisation de return</title>
</head>
<body>	   
                                
<?php
	function calcul($a, $b){
		$c = $a + $b;
		return $c;
	}
	$resultat = calcul(1, 2);
	echo $resultat;
?>
</body>
</html>