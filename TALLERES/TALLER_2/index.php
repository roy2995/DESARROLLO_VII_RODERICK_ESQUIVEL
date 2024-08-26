<?php
$name = "Juan";
$age = 25;

// Concatenation using the . operator
$introduction1 = "Hi, my name is " . $name . " and I am " . $age . " years old.";

// Concatenation within double quotes
$introduction2 = "Hi, my name is $name and I am $age years old.";

// Definition of a constant
define("GREETING", "Welcome!");

// Concatenation with constant
$message = GREETING . " " . $name;

echo $introduction1 . "<br>";
echo $introduction2 . "<br>";
echo $message . "<br>";
?>
