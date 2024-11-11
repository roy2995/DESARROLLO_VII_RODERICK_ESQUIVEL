<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['usuario_id'])) {
    $receta_id = $_POST['receta_id'];
    $comentario = $_POST['comentario'];
    $calificacion = $_POST['calificacion'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO comentarios (receta_id, usuario_id, comentario, calificacion) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$receta_id, $usuario_id, $comentario, $calificacion]);

    echo "Comentario agregado con éxito";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comentarios y Valoraciones</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="comentarios.php">
            <input type="hidden" name="receta_id" value="<?php echo htmlspecialchars($_GET['receta_id']); ?>">
            <label>Comentario</label>
            <textarea name="comentario" required></textarea>
            <label>Calificación (1-5)</label>
            <input type="number" name="calificacion" min="1" max="5" required>
            <button type="submit">Comentar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
