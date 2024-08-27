<?php
echo "<h2>While Loop</h2>";

// Basic while loop example
$counter = 1;
echo "Counting from 1 to 5 with while:<br>";
while ($counter <= 5) {
    echo "$counter ";
    $counter++;
}
echo "<br><br>";

// While loop with complex condition
$number = 20;
echo "Dividing $number by 2 until it's less than 1:<br>";
while ($number >= 1) {
    echo "$number ";
    $number /= 2;
}
echo "<br><br>";

// Using break in a while loop
$i = 0;
echo "Using break to exit the loop:<br>";
while (true) {
    if ($i >= 5) {
        break;
    }
    echo "$i ";
    $i++;
}
echo "<br><br>";

// Using continue in a while loop
$j = 0;
echo "Odd numbers less than 10 using continue:<br>";
while ($j < 10) {
    $j++;
    if ($j % 2 == 0) {
        continue;
    }
    echo "$j ";
}
echo "<br><br>";

// Example of a while loop to read a file (simulated)
$lines = ["Line 1", "Line 2", "Line 3", "Line 4", "Line 5"];
$index = 0;
echo "Reading lines from a file (simulated):<br>";
while (isset($lines[$index])) {
    echo $lines[$index] . "<br>";
    $index++;
}
?>
