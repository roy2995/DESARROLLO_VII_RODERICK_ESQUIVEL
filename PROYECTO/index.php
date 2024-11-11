<?php
include 'db.php';

$sql = "SELECT * FROM recetas";
$stmt = $conn->query($sql);
$recetas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Recetas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h2>Recetas</h2>
        <?php foreach ($recetas as $receta): ?>
            <div>
                <h3><?php echo htmlspecialchars($receta['titulo']); ?></h3>
                <p><?php echo htmlspecialchars($receta['descripcion']); ?></p>
                <a href="ver_receta.php?id=<?php echo $receta['id']; ?>">Ver detalles</a>
            </div>
        <?php endforeach; ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
