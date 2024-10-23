<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
        exit();
    }

    $calificaciones = [
        'estudiante1' => ['wilfredo' => 'estudiante1', 'calificacion' => 85],
        'estudiante2' => ['wigudunivaler' => 'estudiante2', 'calificacion' => 85],
        'estudiante3' => ['ghadafy' => 'estudiante3', 'calificacion' => 85],
    ];

    $rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvanido, <?php echo $_SESSION['usuario']; ?> (Rol: <?php echo $rol?>)</h2>
    <?php if($rol == 'profesor'): ?>
        <h3>Lista de estudiantes y Calificaciones</h3>
        <ul>
            <?php foreach($calificaciones as $estudiante): ?>
                <li><?php echo $estudiante['nombre']; ?> : <?php echo $estudiante['calificacion'];?></li>
            <?php endforeach; ?>
        </ul>
    
    <?php elseif($rol == 'estudiante'): ?>
        <h3>Tu Calificacion</h3>
        <p>
            <?php 
            $username = $_SESSION['usuario'];
            echo "Estudiante: " . $calificaciones[$username]['nombre'] . "<br>";
            echo "Calificación: " . $calificaciones[$username]['calificacion'];
            ?>
        </p>
    <?php endif?>
    
    <br><br>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>