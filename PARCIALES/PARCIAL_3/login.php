<?php
    session_start();
    $usuarios = [
        ['profesor' => '12345', 'rol' => 'profesor'],
        ['estudiante' => '12345', 'rol' => 'estudiante']
    ];

    $error = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) < 3 || !ctype_alnum($username)){
            $error;
        }
        elseif(strlen($password) < 5){
            $error;
        }
        elseif(!isset($usuarios[$username]) || $usuarios[$username]['password'] !== $password){
            $error = "Credenciales incorrectas";
        }
        else{
            $_SESSION['usuario'] = $username;
            $_SESSION['rol'] = $usuarios[$username]['rol'];
            header('location: dasboard.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="">Username</label>
        <input type="text" name="username" required><br><br>
        <label for="">Password</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p style="color: red;"><?php echo $error?></p>
</body>
</html>