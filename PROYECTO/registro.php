<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $email, $contraseña]);

    echo "<p>Usuario registrado con éxito</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="registro.php">
            <label>Nombre</label>
            <input type="text" name="nombre" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Contraseña</label>
            <input type="password" name="contraseña" required>
            <button type="submit">Registrar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
