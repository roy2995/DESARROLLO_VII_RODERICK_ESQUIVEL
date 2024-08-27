<?php
// Configuration
define('APP_NAME', 'My PHP Application');
define('VERSION', '1.0.0');

// Utility functions
function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}

function cleanText($text) {
    return htmlspecialchars(trim($text), ENT_QUOTES, 'UTF-8');
}

function calculateAge($birthDate) {
    $today = new DateTime();
    $birthDate = new DateTime($birthDate);
    $age = $today->diff($birthDate);
    return $age->y;
}

// Example data (in a real application, this might come from a database)
$user = [
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'birthDate' => '1990-05-15'
];

// Include external files (simulated)
// include_once 'config.php';
// require_once 'functions.php';

// Data processing logic
$userName = cleanText($user['name']);
$userEmail = cleanText($user['email']);
$userAge = calculateAge($user['birthDate']);

// Start of HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> - Best Practices</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .info { background-color: #e7f3fe; border-left: 6px solid #2196F3; margin-bottom: 15px; padding: 10px; }
    </style>
</head>
<body>
    <h1>Best Practices in PHP</h1>
    <p>Application Version: <?= VERSION ?></p>
    
    <h2>User Information</h2>
    <div class="info">
        <p>Name: <?= $userName ?></p>
        <p>Email: <?= $userEmail ?></p>
        <p>Age: <?= $userAge ?> years</p>
    </div>
    
    <p>Current Date: <?= formatDate(date('Y-m-d')) ?></p>

    <?php
    // Example of using control structures
    $currentHour = date('H');
    if ($currentHour < 12) {
        echo "<p>Good morning, $userName!</p>";
    } elseif ($currentHour < 18) {
        echo "<p>Good afternoon, $userName!</p>";
    } else {
        echo "<p>Good evening, $userName!</p>";
    }
    ?>
</body>
</html>
