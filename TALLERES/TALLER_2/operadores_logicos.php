<?php
echo "<h2>Logical Operators</h2>";

$true = true;
$false = false;

echo "Variables: true = " . var_export($true, true) . ", false = " . var_export($false, true) . "<br><br>";

// AND (&&) Operator
echo "AND (&&):<br>";
echo "true && true = " . var_export($true && $true, true) . "<br>";
echo "true && false = " . var_export($true && $false, true) . "<br>";
echo "false && false = " . var_export($false && $false, true) . "<br><br>";

// OR (||) Operator
echo "OR (||):<br>";
echo "true || true = " . var_export($true || $true, true) . "<br>";
echo "true || false = " . var_export($true || $false, true) . "<br>";
echo "false || false = " . var_export($false || $false, true) . "<br><br>";

// NOT (!) Operator
echo "NOT (!):<br>";
echo "!true = " . var_export(!$true, true) . "<br>";
echo "!false = " . var_export(!$false, true) . "<br><br>";

// XOR Operator
echo "XOR:<br>";
echo "true XOR true = " . var_export($true xor $true, true) . "<br>";
echo "true XOR false = " . var_export($true xor $false, true) . "<br>";
echo "false XOR false = " . var_export($false xor $false, true) . "<br><br>";

// Practical Example
$age = 25;
$hasLicense = true;

$canDrive = ($age >= 18) && $hasLicense;
echo "Practical Example:<br>";
echo "Age: $age, Has license: " . var_export($hasLicense, true) . "<br>";
echo "Can drive? " . var_export($canDrive, true) . "<br><br>";

// Short-circuiting Demonstration
echo "Short-circuiting Demonstration:<br>";
$x = false;
$y = true;
$result = $x && $y; // $y is not evaluated because $x is false
echo "false && true = " . var_export($result, true) . " (y is not evaluated)<br>";

$result = $x || $y; // $y is evaluated because $x is false
echo "false || true = " . var_export($result, true) . " (y is evaluated)<br>";
?>
