<?php
echo "<h2>Do-While Loop</h2>";

// Basic do-while loop example
$counter = 1;
echo "Counting from 1 to 5 with do-while:<br>";
do {
    echo "$counter ";
    $counter++;
} while ($counter <= 5);
echo "<br><br>";

// Example of a do-while that executes only once
$number = 10;
echo "Example with false condition from the start:<br>";
do {
    echo "This message will be printed once even though the condition is false.<br>";
} while ($number < 5);
echo "<br>";

// Using do-while to validate user input (simulated)
$input = "";
$attempts = 0;
echo "Simulating user input validation:<br>";
do {
    $attempts++;
    // Simulating user input alternating between valid and invalid values
    $input = ($attempts % 2 == 0) ? "valid" : "invalid";
    echo "Attempt $attempts: Input $input<br>";
} while ($input != "valid" && $attempts < 5);

if ($input == "valid") {
    echo "Valid input received.<br>";
} else {
    echo "Maximum number of attempts reached.<br>";
}
echo "<br>";

// Example of do-while with break
echo "Generating random numbers until a 5 is obtained:<br>";
do {
    $random = rand(1, 10);
    echo "$random ";
    if ($random == 5) {
        break;
    }
} while (true);
echo "<br>Found the 5, end of loop.<br>";
?>
