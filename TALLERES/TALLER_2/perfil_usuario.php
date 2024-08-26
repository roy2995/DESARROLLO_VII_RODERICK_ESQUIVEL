<?php
$full_name = "Roderick Enrique Esquivel Morales";
$age = 25;
$email = "roderck.esquivel@utp.ac.pa"; 
$phone = "123-456-7890"; 

define("OCCUPATION", "Software / Game Developer");

$paragraph1 = "Full Name: " . $full_name . "<br>Age: " . $age . "<br>";
$paragraph2 = "Email: $email<br>Phone: " . $phone . "<br>";
$paragraph3 = "Occupation: " . OCCUPATION . "<br>";

echo $paragraph1;
print($paragraph2);
printf("Summary: %s, %d years old, %s, %s<br>", $full_name, $age, $email, OCCUPATION);

echo "<br>Debugging information:<br>";
var_dump($full_name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($email);
echo "<br>";
var_dump($phone);
echo "<br>";
var_dump(OCCUPATION);
echo "<br>";
?>
