<?php
echo "<h2>Assignment Operators</h2>";

$x = 10;
echo "Initial value of x: $x<br>";

$x += 5;  // Equivalent to: $x = $x + 5
echo "After x += 5: $x<br>";

$x -= 3;  // Equivalent to: $x = $x - 3
echo "After x -= 3: $x<br>";

$x *= 2;  // Equivalent to: $x = $x * 2
echo "After x *= 2: $x<br>";

$x /= 4;  // Equivalent to: $x = $x / 4
echo "After x /= 4: $x<br>";

$x %= 3;  // Equivalent to: $x = $x % 3
echo "After x %= 3: $x<br>";

// Assignment operator with concatenation
$str = "Hello";
$str .= " World";  // Equivalent to: $str = $str . " World"
echo "Concatenation with .=: $str<br>";

// Assignment operator with exponentiation (PHP 5.6+)
$y = 2;
$y **= 3;  // Equivalent to: $y = $y ** 3
echo "After y **= 3: $y<br>";

// Null coalescing assignment operator (PHP 7+)
$z = null;
$z ??= 5;  // Assigns 5 to $z only if $z is null
echo "After z ??= 5: $z<br>";

// Demonstration of assignment by reference
$a = 1;
$b = &$a;  // $b is a reference to $a
$b = 2;    // Changes both $a and $b
echo "a: $a, b: $b<br>";
?>
