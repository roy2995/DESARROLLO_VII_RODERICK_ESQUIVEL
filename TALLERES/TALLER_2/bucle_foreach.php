<?php
echo "<h2>Foreach Loop</h2>";

// Basic example with an indexed array
$fruits = ["apple", "banana", "orange", "grape", "pear"];
echo "List of fruits:<br>";
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}
echo "<br>";

// Example with an associative array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "Madrid",
    "profession" => "Developer"
];
echo "Person information:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
echo "<br>";

// Example with a multidimensional array
$students = [
    ["name" => "Ana", "grades" => [85, 92, 78]],
    ["name" => "Luis", "grades" => [90, 87, 93]],
    ["name" => "Carlos", "grades" => [76, 88, 82]]
];
echo "Student grades:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Grades: ";
    foreach ($student["grades"] as $grade) {
        echo "$grade ";
    }
    echo "<br><br>";
}

// Example of modifying array elements
$numbers = [1, 2, 3, 4, 5];
echo "Original numbers: " . implode(", ", $numbers) . "<br>";
foreach ($numbers as &$number) {
    $number *= 2;
}
unset($number); // Unlink the reference
echo "Doubled numbers: " . implode(", ", $numbers) . "<br><br>";

// Example with break and continue
$data = [1, 2, "three", 4, "five", 6, 7, "eight", 9];
echo "Processing data until the first string is found:<br>";
foreach ($data as $item) {
    if (is_string($item)) {
        echo "First string found: $item<br>";
        break;
    }
    echo "$item ";
}
echo "<br>Showing only numbers:<br>";
foreach ($data as $item) {
    if (!is_numeric($item)) {
        continue;
    }
    echo "$item ";
}
?>
