<?php
echo "<h2>Recursive Loops</h2>";

// Example 1: Factorial of a number
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
echo "Factorial of $number is: " . factorial($number) . "<br><br>";

// Example 2: Fibonacci sequence
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

echo "The first 10 numbers of the Fibonacci sequence are: ";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}
echo "<br><br>";

// Example 3: Recursive traversal of a multidimensional array
$menu = [
    'Home' => [],
    'Products' => [
        'Electronics' => [
            'Phones' => [],
            'Tablets' => [],
            'Laptops' => []
        ],
        'Clothing' => [
            'Men' => [],
            'Women' => [],
            'Kids' => []
        ]
    ],
    'About' => [],
    'Contact' => []
];

function printMenu($menu, $level = 0) {
    foreach ($menu as $item => $subitems) {
        echo str_repeat('--', $level) . $item . "<br>";
        if (!empty($subitems)) {
            printMenu($subitems, $level + 1);
        }
    }
}

echo "Menu structure:<br>";
printMenu($menu);
echo "<br>";

// Example 4: Greatest Common Divisor (GCD)
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

$num1 = 48;
$num2 = 18;
echo "The GCD of $num1 and $num2 is: " . gcd($num1, $num2) . "<br>";
?>
