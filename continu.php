<!DOCTYPE html>
<html>
<head>
	<title>utilisation de Break et Continue</title>
</head>
<body>
	<?php 
for( $i = 0; $i < 3; $i++ ) 
{ 
  echo 'A'; 
  
  continue; 
  
  echo 'B'; // cette instruction ne sera jamais exécutée! 
} 
?> 
</body>
</html>