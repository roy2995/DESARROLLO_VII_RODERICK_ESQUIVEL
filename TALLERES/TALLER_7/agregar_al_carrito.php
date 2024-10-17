<?php
include 'config_sesion.php';

if (isset($_GET['id'])) {
    $productoId = intval($_GET['id']);

    // Comprobar si el carrito ya existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Si el producto ya está en el carrito, incrementar la cantidad
    if (isset($_SESSION['carrito'][$productoId])) {
        $_SESSION['carrito'][$productoId]['cantidad']++;
    } else {
        // Añadir el producto al carrito con una cantidad inicial de 1
        $_SESSION['carrito'][$productoId] = ['cantidad' => 1];
    }

    header("Location: ver_carrito.php");
    exit();
}
?>
