<?php
echo "<h2>For Loop</h2>";

// Basic for loop example
echo "Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "<br><br>";

// For loop with different step
echo "Even numbers from 2 to 10:<br>";
for ($i = 2; $i <= 10; $i += 2) {
    echo "$i ";
}
echo "<br><br>";

// Decreasing for loop
echo "Countdown from 5 to 1:<br>";
for ($i = 5; $i >= 1; $i--) {
    echo "$i ";
}
echo "<br><br>";

// For loop with multiple expressions
echo "Using multiple variables in the loop:<br>";
for ($i = 0, $j = 5; $i < 5; $i++, $j--) {
    echo "i: $i, j: $j<br>";
}
echo "<br>";

// For loop to iterate over an array
$fruits = ["apple", "banana", "orange", "grape", "pear"];
echo "List of fruits:<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo ($i + 1) . ". " . $fruits[$i] . "<br>";
}
?>
