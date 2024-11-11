<?php
include 'db.php';
session_start();

if ($_SESSION['usuario_rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

$sqlRecetas = "SELECT * FROM recetas";
$stmtRecetas = $conn->query($sqlRecetas);
$recetas = $stmtRecetas->fetchAll();

$sqlComentarios = "SELECT * FROM comentarios";
$stmtComentarios = $conn->query($sqlComentarios);
$comentarios = $stmtComentarios->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h2>Panel de Administración</h2>

        <h3>Recetas</h3>
        <table>
            <tr><th>Título</th><th>Acciones</th></tr>
            <?php foreach ($recetas as $receta): ?>
                <tr>
                    <td><?php echo htmlspecialchars($receta['titulo']); ?></td>
                    <td><a href="eliminar_receta.php?id=<?php echo $receta['id']; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h3>Comentarios</h3>
        <table>
            <tr><th>Comentario</th><th>Calificación</th><th>Acciones</th></tr>
            <?php foreach ($comentarios as $comentario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($comentario['comentario']); ?></td>
                    <td><?php echo htmlspecialchars($comentario['calificacion']); ?></td>
                    <td><a href="eliminar_comentario.php?id=<?php echo $comentario['id']; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
