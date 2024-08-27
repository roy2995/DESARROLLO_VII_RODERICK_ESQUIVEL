<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML Integration</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .highlight { color: blue; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>PHP and HTML Integration</h1>
    
    <?php
    $name = "John";
    $age = 25;
    $skills = ["PHP", "HTML", "CSS", "JavaScript"];
    ?>

    <h2>Personal Information</h2>
    <p>Name: <span class="highlight"><?php echo $name; ?></span></p>
    <p>Age: <?= $age ?> years</p>

    <h2>Skills</h2>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?= $skill ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Multiplication Table</h2>
    <table>
        <tr>
            <th>Number</th>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <th><?= $i ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <th><?= $i ?></th>
                <?php for ($j = 1; $j <= 5; $j++): ?>
                    <td><?= $i * $j ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <h2>Conditional Content</h2>
    <?php if ($age >= 18): ?>
        <p>You are an adult.</p>
    <?php else: ?>
        <p>You are underage.</p>
    <?php endif; ?>

    <h2>Current Date and Time</h2>
    <p>The current date and time is: <?= date('Y-m-d H:i:s') ?></p>
</body>
</html>
