<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(50));
        $sql = "UPDATE usuarios SET token = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$token, $email]);

        $enlace = "http://localhost/recetas/restablecer_contraseña.php?token=$token";
        echo "Se ha enviado un enlace de restablecimiento de contraseña a tu correo: $enlace";
    } else {
        echo "Correo no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="recuperar_contraseña.php">
            <label>Correo electrónico</label>
            <input type="email" name="email" required>
            <button type="submit">Recuperar Contraseña</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
