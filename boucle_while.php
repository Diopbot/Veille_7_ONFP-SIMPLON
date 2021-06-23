<!DOCTYPE html>
<html>
<head>
	<title>exemple d'utilisation de la boucle while </title>
</head>
<body>
	<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <100)
{
    echo $nombre_de_lignes.' Je ne dois pas regarder les enfants en d\'hord de 
    la classe quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; 
    // $nombre_de_lignes = $nombre_de_lignes + 1
}
	?>
</body>
</html>