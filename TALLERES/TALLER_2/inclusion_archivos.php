<?php
echo "<h2>File Inclusion</h2>";

// Using include_once to prevent multiple inclusions
echo "<h3>Using include_once:</h3>";
include_once 'funciones_utiles.php'; // Make sure this file exists
echo "Double of 5 is: " . double(5) . "<br>";
echo personalizedGreeting("Ana") . "<br>";

// Using require_once to prevent multiple inclusions
echo "<h3>Using require_once:</h3>";
require_once 'funciones_utiles.php'; // Make sure this file exists
echo "Double of 10 is: " . double(10) . "<br>";

// Attempting to include a non-existent file
echo "<h3>Attempting to include a non-existent file:</h3>";
@include 'non_existent_file.php'; // Suppresses warnings
echo "This line will execute even if the file does not exist.<br>";

// Attempting to require a non-existent file
echo "<h3>Attempting to require a non-existent file:</h3>";
// Comment out the following line to avoid a fatal error
// require 'non_existent_file.php';
echo "This line will not execute if a required file does not exist.<br>";

?>
