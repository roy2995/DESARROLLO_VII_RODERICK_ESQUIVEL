<?php
// Simple function with no parameters
function greet() {
    echo "Hello, welcome to PHP!<br>";
}

// Function with parameters
function greetPerson($name) {
    echo "Hello, $name!<br>";
}

// Function with default parameters
function introduce($name, $age = 25) {
    echo "$name is $age years old.<br>";
}

// Function that returns a value
function add($a, $b) {
    return $a + $b;
}

// Function with reference parameters
function increment(&$number) {
    $number++;
}

// Function calls
greet();
greetPerson("John");
introduce("Mary");
introduce("Carlos", 30);
echo "The sum of 5 and 3 is: " . add(5, 3) . "<br>";

$x = 5;
increment($x);
echo "The value of x after incrementing is: $x<br>";

// Function with a variable number of arguments
function addAll(...$numbers) {
    return array_sum($numbers);
}

echo "The sum of 1, 2, 3, 4 is: " . addAll(1, 2, 3, 4) . "<br>";

// Anonymous function
$multiply = function($a, $b) {
    return $a * $b;
};

echo "5 x 3 = " . $multiply(5, 3) . "<br>";

?>
