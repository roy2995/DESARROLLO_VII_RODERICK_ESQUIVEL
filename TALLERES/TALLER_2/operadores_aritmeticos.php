<?php
$a = 10;
$b = 3;

echo "<h2>Arithmetic Operators</h2>";
echo "Variables: a = $a, b = $b<br><br>";

echo "Addition (+): " . ($a + $b) . "<br>";
echo "Subtraction (-): " . ($a - $b) . "<br>";
echo "Multiplication (*): " . ($a * $b) . "<br>";
echo "Division (/): " . ($a / $b) . "<br>";
echo "Modulus (remainder) (%): " . ($a % $b) . "<br>";
echo "Exponentiation (**): " . ($a ** $b) . "<br>";

// Demonstrating operator precedence
echo "Operator precedence: " . (5 + 3 * 2) . "<br>";
echo "Using parentheses to change precedence: " . ((5 + 3) * 2) . "<br>";

// Integer division
echo "Integer division (intdiv): " . intdiv($a, $b) . "<br>";

// Increment and decrement
$c = 5;
echo "Original value of c: $c<br>";
echo "Post-increment (c++): " . $c++ . "<br>";
echo "Value of c after post-increment: $c<br>";
echo "Pre-increment (++c): " . ++$c . "<br>";
echo "Final value of c: $c<br>";
?>
