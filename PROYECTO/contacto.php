<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes configurar el envío de correo
    echo "Gracias por tu mensaje, $nombre. Te responderemos pronto.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="contacto.php">
            <label>Nombre</label>
            <input type="text" name="nombre" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Mensaje</label>
            <textarea name="mensaje" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
