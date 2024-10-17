<?php
include 'config_sesion.php';

if (isset($_GET['id'])) {
    $productoId = intval($_GET['id']);

    if (isset($_SESSION['carrito'][$productoId])) {
        unset($_SESSION['carrito'][$productoId]);
    }
}

header("Location: ver_carrito.php");
exit();
?>
