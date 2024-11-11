<?php
include 'db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nueva_contraseña = password_hash($_POST['nueva_contraseña'], PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET contraseña = ?, token = NULL WHERE token = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nueva_contraseña, $token]);
        echo "Contraseña restablecida con éxito.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form method="POST" action="restablecer_contraseña.php?token=<?php echo htmlspecialchars($_GET['token']); ?>">
            <label>Nueva Contraseña</label>
            <input type="password" name="nueva_contraseña" required>
            <button type="submit">Restablecer Contraseña</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
