<?php
echo "<h2>Comparison Operators</h2>";

$a = 5;
$b = '5';
$c = 10;

echo "Variables: a = $a (integer), b = '$b' (string), c = $c (integer)<br><br>";

echo "Equal (==): ";
var_dump($a == $b);
echo "<br>";

echo "Identical (===): ";
var_dump($a === $b);
echo "<br>";

echo "Not equal (!=): ";
var_dump($a != $c);
echo "<br>";

echo "Not identical (!==): ";
var_dump($a !== $b);
echo "<br>";

echo "Less than (<): ";
var_dump($a < $c);
echo "<br>";

echo "Greater than (>): ";
var_dump($a > $c);
echo "<br>";

echo "Less than or equal (<=): ";
var_dump($a <= $b);
echo "<br>";

echo "Greater than or equal (>=): ";
var_dump($a >= $c);
echo "<br>";

// Spaceship operator (PHP 7+)
echo "Spaceship operator (<=>): ";
var_dump($a <=> $c);
echo "<br>";

// Null coalescing operator (PHP 7+)
$d = null;
$e = $d ?? 'default value';
echo "Null coalescing operator (??): $e<br>";
?>
