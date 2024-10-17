<?php
include 'config_sesion.php';

// Lista de productos simulada (misma que en productos.php)
$productos = [
    1 => ['nombre' => 'Producto A', 'precio' => 10.00],
    2 => ['nombre' => 'Producto B', 'precio' => 15.00],
    3 => ['nombre' => 'Producto C', 'precio' => 8.50],
    4 => ['nombre' => 'Producto D', 'precio' => 20.00],
    5 => ['nombre' => 'Producto E', 'precio' => 12.75]
];

echo "<h1>Carrito de Compras</h1>";
$total = 0;

if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $id => $producto) {
        $nombre = htmlspecialchars($productos[$id]['nombre']);
        $precio = $productos[$id]['precio'];
        $cantidad = intval($producto['cantidad']);
        $subtotal = $precio * $cantidad;
        $total += $subtotal;

        echo "<li>$nombre - Cantidad: $cantidad - Subtotal: $" . number_format($subtotal, 2);
        echo " <a href='eliminar_del_carrito.php?id=" . urlencode($id) . "'>Eliminar</a></li>";
    }
    echo "</ul>";
    echo "<h3>Total: $" . number_format($total, 2) . "</h3>";
    echo "<a href='checkout.php'>Finalizar Compra</a>";
} else {
    echo "<p>El carrito está vacío.</p>";
    echo "<a href='productos.php'>Volver a Productos</a>";
}
?>
