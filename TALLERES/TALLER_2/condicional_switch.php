<?php
echo "<h2>Conditional Structure: switch</h2>";

// Basic switch example
$dayOfWeek = "Wednesday";
switch ($dayOfWeek) {
    case "Monday":
        echo "Today is the first day of the work week.<br>";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "We are in the middle of the week.<br>";
        break;
    case "Friday":
        echo "Finally, it's Friday!<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!<br>";
        break;
    default:
        echo "Invalid day.<br>";
}
echo "<br>";

// Switch example with numeric values
$month = 7;
switch ($month) {
    case 12:
    case 1:
    case 2:
        echo "It is winter.<br>";
        break;
    case 3:
    case 4:
    case 5:
        echo "It is spring.<br>";
        break;
    case 6:
    case 7:
    case 8:
        echo "It is summer.<br>";
        break;
    case 9:
    case 10:
    case 11:
        echo "It is autumn.<br>";
        break;
    default:
        echo "Invalid month.<br>";
}
echo "<br>";

// Switch example with expressions
$score = 85;
switch (true) {
    case ($score >= 90):
        echo "Excellent performance.<br>";
        break;
    case ($score >= 80):
        echo "Good performance.<br>";
        break;
    case ($score >= 70):
        echo "Acceptable performance.<br>";
        break;
    case ($score >= 60):
        echo "Needs improvement.<br>";
        break;
    default:
        echo "Insufficient performance.<br>";
}
echo "<br>";

// Switch example without break (fall-through)
$option = 2;
switch ($option) {
    case 1:
        echo "You selected option 1.<br>";
    case 2:
        echo "You selected option 2.<br>";
    case 3:
        echo "You selected option 3.<br>";
        break;
    default:
        echo "Invalid option.<br>";
}

?>
