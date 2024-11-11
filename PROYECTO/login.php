<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        $_SESSION['usuario_id'] = $user['id'];
        echo "Inicio de sesión exitoso";
    } else {
        echo "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="login.php">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Contraseña</label>
            <input type="password" name="contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
