<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $tipo_comida = $_GET['tipo_comida'] ?? '';
    $ingredientes = $_GET['ingredientes'] ?? '';
    $tiempo = $_GET['tiempo'] ?? 999;

    $sql = "SELECT * FROM recetas WHERE tipo_comida LIKE ? AND ingredientes LIKE ? AND tiempo_preparacion <= ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["%$tipo_comida%", "%$ingredientes%", $tiempo]);
    $recetas = $stmt->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Recetas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="GET" action="buscar_recetas.php">
            <label>Tipo de Comida</label>
            <input type="text" name="tipo_comida">
            <label>Ingredientes</label>
            <input type="text" name="ingredientes">
            <label>Tiempo máximo (min)</label>
            <input type="number" name="tiempo">
            <button type="submit">Buscar</button>
        </form>

        <h2>Resultados de la Búsqueda</h2>
        <?php foreach ($recetas as $receta): ?>
            <div>
                <h3><?php echo htmlspecialchars($receta['titulo']); ?></h3>
                <p><?php echo htmlspecialchars($receta['descripcion']); ?></p>
            </div>
        <?php endforeach; ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
