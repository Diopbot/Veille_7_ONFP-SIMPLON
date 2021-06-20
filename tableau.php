<!DOCTYPE html>
<html>
<head>
	<title>test des opérateurs de tableaux </title>
</head>
<body>
<?php
$a = array("a" => "pomme", "b" => "banane");
$b = array("a" =>"poire", "b" => "fraise", "c" => "cerise");

$c = $a + $b; // Union de $a et $b
echo "Union de \$a et \$b : \n";
var_dump($c);

$c = $b + $a; // Union de $b et $a
echo "Union de \$b et \$a : \n";
var_dump($c);
?>
</body>
</html>