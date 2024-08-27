<?php
echo "<h2>Pattern Generator</h2>";

// 1. Right-angled triangle pattern with asterisks using a for loop
echo "<h3>Right-angled triangle pattern:</h3>";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat('*', $i) . "<br>";
}
echo "<br>";

// 2. Sequence of numbers from 1 to 20 showing only odd numbers using a while loop
echo "<h3>Sequence of odd numbers:</h3>";
$number = 1;
while ($number <= 20) {
    if ($number % 2 != 0) {
        echo "$number ";
    }
    $number++;
}
echo "<br><br>";

// 3. Countdown from 10 to 1, skipping number 5, using a do-while loop
echo "<h3>Countdown (skipping number 5):</h3>";
$count = 10;
do {
    if ($count != 5) {
        echo "$count ";
    }
    $count--;
} while ($count >= 1);
echo "<br><br>";

?>
