<?php
echo "<h2>Ternary Operator</h2>";

// Basic example
$age = 20;
$message = ($age >= 18) ? "You are an adult" : "You are a minor";
echo "Age: $age<br>";
echo "Message: $message<br><br>";

// Usage with different data types
$name = "John";
$greeting = ($name !== "") ? "Hello, $name!" : "Hello, guest!";
echo "Name: '$name'<br>";
echo "Greeting: $greeting<br><br>";

// Comparison with traditional if-else
$score = 75;
if ($score >= 60) {
    $result = "Passed";
} else {
    $result = "Failed";
}
echo "Score: $score<br>";
echo "Result (if-else): $result<br>";

// The same example with ternary operator
$resultTernary = ($score >= 60) ? "Passed" : "Failed";
echo "Result (ternary): $resultTernary<br><br>";

// Nested ternary operators (use with caution)
$grade = 85;
$finalGrade = ($grade >= 90) ? "A" : (($grade >= 80) ? "B" : (($grade >= 70) ? "C" : (($grade >= 60) ? "D" : "F")));
echo "Grade: $grade<br>";
echo "Final Grade: $finalGrade<br><br>";

// Using the ternary operator for a default value
$username = "";
$displayName = $username ?: "Guest"; // Equivalent to: $username ? $username : "Guest"
echo "Username: '$username'<br>";
echo "Display Name: $displayName<br><br>";

// Using the ternary operator in an expression
$x = 5;
$y = 10;
echo "x = $x, y = $y<br>";
echo "The larger value is: " . (($x > $y) ? $x : $y) . "<br>";
?>
