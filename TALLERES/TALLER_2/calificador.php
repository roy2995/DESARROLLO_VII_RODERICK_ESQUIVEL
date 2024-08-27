<?php
// Declaring the $grade variable and assigning it a numeric value between 0 and 100
$grade = 85;

// Using if-elseif-else to determine the corresponding letter grade
if ($grade >= 90) {
    $letterGrade = 'A';
} elseif ($grade >= 80) {
    $letterGrade = 'B';
} elseif ($grade >= 70) {
    $letterGrade = 'C';
} elseif ($grade >= 60) {
    $letterGrade = 'D';
} else {
    $letterGrade = 'F';
}

// Printing the letter grade
echo "Your grade is $letterGrade.<br>";

// Using the ternary operator to determine if the grade is passing or failing
$status = ($letterGrade !== 'F') ? "Passed" : "Failed";
echo "$status<br>";

// Using switch to print an additional message based on the letter grade
switch ($letterGrade) {
    case 'A':
        echo "Excellent work!<br>";
        break;
    case 'B':
        echo "Good job!<br>";
        break;
    case 'C':
        echo "Acceptable work.<br>";
        break;
    case 'D':
        echo "Needs improvement.<br>";
        break;
    case 'F':
        echo "You need to work harder.<br>";
        break;
    default:
        echo "Invalid grade.<br>";
        break;
}
?>
