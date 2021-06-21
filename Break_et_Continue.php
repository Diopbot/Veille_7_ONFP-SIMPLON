<!DOCTYPE html>
<html>
<head>
	<title>utilisation de Break et Continue</title>
</head>
<body>
	<?php 
$i = 1; // initialisation 

while( true ) // condition de boucle toujours vraie 
{ 
  echo $i . '<br />'; // affichage de $i 
  
  $i++; // incrémentation 
  
  if( $i == 10 ) // test de sortie de boucle 
    break; // sortie de boucle 
} 
?> 
</body>
</html>