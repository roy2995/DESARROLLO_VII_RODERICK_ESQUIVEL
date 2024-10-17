<?php
include 'config_sesion.php';

if (isset($_SESSION['carrito'])) {
    $total = 0;
    $productos = [
        1 => ['nombre' => 'Producto A', 'precio' => 10.00],
        2 => ['nombre' => 'Producto B', 'precio' => 15.00],
        3 => ['nombre' => 'Producto C', 'precio' => 8.50],
        4 => ['nombre' => 'Producto D', 'precio' => 20.00],
        5 => ['nombre' => 'Producto E', 'precio' => 12.75]
    ];

    echo "<h1>Resumen de la Compra</h1>";
    echo "<ul>";

    foreach ($_SESSION['carrito'] as $id => $producto) {
        $nombre = htmlspecialchars($productos[$id]['nombre']);
        $precio = $productos[$id]['precio'];
        $cantidad = $producto['cantidad'];
        $subtotal = $precio * $cantidad;
        $total += $subtotal;

        echo "<li>$nombre - Cantidad: $cantidad - Subtotal: $" . number_format($subtotal, 2) . "</li>";
    }

    echo "</ul>";
    echo "<h3>Total: $" . number_format($total, 2) . "</h3>";

    // Preguntar el nombre del usuario y guardarlo en una cookie
    $nombreUsuario = $_POST['nombre'] ?? 'Invitado';
    setcookie("nombre_usuario", $nombreUsuario, time() + 86400, "/", "", true, true);

    echo "<p>Gracias por tu compra, $nombreUsuario.</p>";

    // Vaciar el carrito
    unset($_SESSION['carrito']);
} else {
    echo "<p>No hay productos en el carrito.</p>";
}

echo "<a href='productos.php'>Volver a la Tienda</a>";
?>
