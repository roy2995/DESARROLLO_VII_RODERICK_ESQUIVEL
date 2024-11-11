<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario_id'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $ingredientes = $_POST['ingredientes'];
    $pasos = $_POST['pasos'];
    $tiempo = $_POST['tiempo'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO recetas (usuario_id, titulo, descripcion, ingredientes, pasos, tiempo_preparacion) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$usuario_id, $titulo, $descripcion, $ingredientes, $pasos, $tiempo]);

    echo "Receta publicada con éxito";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Publicar Receta</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="publicar_receta.php">
            <label>Título</label>
            <input type="text" name="titulo" required>
            <label>Descripción</label>
            <textarea name="descripcion" required></textarea>
            <label>Ingredientes</label>
            <textarea name="ingredientes" required></textarea>
            <label>Pasos</label>
            <textarea name="pasos" required></textarea>
            <label>Tiempo de preparación (min)</label>
            <input type="number" name="tiempo" required>
            <button type="submit">Publicar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
