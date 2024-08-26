<?php
// Variable definitions
$name = "Maria";
$age = 30;
$city = "Madrid";

// Constant definition
define("PROFESSION", "Engineer");

// Creating a message using different concatenation and print methods
$message1 = "Hello, my name is " . $name . " and I am " . $age . " years old.";
$message2 = "I live in $city and I am an " . PROFESSION . ".";

echo $message1 . "<br>";
print($message2 . "<br>");

printf("In summary: %s, %d years old, %s, %s<br>", $name, $age, $city, PROFESSION);

echo "<br>Debugging information:<br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($city);
echo "<br>";
var_dump(PROFESSION);
echo "<br>";
?>
