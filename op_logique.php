<?php

// --------------------
// foo() ne sera jamais appelée car ces opérateurs s'annulent

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// --------------------
// "||" a un précédence supérieure à "or"

// Le résultat de l'expression (false || true) est affecté à $e
// Agit comme : ($e = (false || true))
$e = false || true;

// La constante false est affectée à $f avant que l'opération "or" apparaisse
// Agit comme : (($f = false) or true)
$f = false or true;

var_dump($e, $f);

// --------------------
// "&&" a un précédence supérieure à "and"

// Le résultat de l'expression (true && false) est affecté à $g
// Agit comme : ($g = (true && false))
$g = true && false;

// La constante true est affectée à $h avant que l'opération "and" apparaisse
// Agit comme : (($h = true) and false)
$h = true and false;

var_dump($g, $h);
?>

