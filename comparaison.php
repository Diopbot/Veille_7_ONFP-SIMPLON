<?php
  $a = '2';    // Type string
  $b = 2;      // Type entier
  $c = 2;      // Type entier
 
  // Comparaison sur les valeurs
  if($a == $b)
  {
    echo '$a et $b ont la même valeur !';
  }
 
  // Comparaison sur les valeurs et les types
  if($a === $c)
  {
    echo '$a et $c sont de même valeur et de même type !';
  }
?>