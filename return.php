<?php
include("b.php");
echo "a";
?>

b.php
<?php
echo "b";
return;
?>

/*
(executing a.php:) will echo "ba".

whereas (b.php modified):

a.php
<?php
include("b.php");
echo "a";
?>
*/