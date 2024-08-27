<?php
echo "<h2>Conditional Structures: if, else, elseif</h2>";

// Basic if example
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br><br>";
}

// if-else example
$hasPermission = false;
if ($hasPermission) {
    echo "You have permission to access.<br>";
} else {
    echo "You do not have permission to access.<br><br>";
}

// if-elseif-else example
$grade = 85;
if ($grade >= 90) {
    echo "Your grade is A.<br>";
} elseif ($grade >= 80) {
    echo "Your grade is B.<br>";
} elseif ($grade >= 70) {
    echo "Your grade is C.<br>";
} elseif ($grade >= 60) {
    echo "Your grade is D.<br>";
} else {
    echo "Your grade is F.<br>";
}
echo "<br>";

// Nested if structures
$isUser = true;
$isAdmin = false;
if ($isUser) {
    echo "Welcome, user.<br>";
    if ($isAdmin) {
        echo "You have administrator privileges.<br>";
    } else {
        echo "You do not have administrator privileges.<br>";
    }
} else {
    echo "Please log in.<br>";
}
echo "<br>";

// Using logical operators in conditions
$user = "admin";
$password = "12345";
if ($user === "admin" && $password === "12345") {
    echo "Successful login as administrator.<br>";
} elseif ($user === "admin" || $password === "12345") {
    echo "Incorrect username or password.<br>";
} else {
    echo "Access denied.<br>";
}
echo "<br>";

// Alternative syntax for control structures
$isWorkday = true;
if ($isWorkday):
    echo "Time to work.<br>";
else:
    echo "Time to rest.<br>";
endif;

?>
