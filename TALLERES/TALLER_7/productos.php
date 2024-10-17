<?php
include 'config_sesion.php';

// Lista de productos simulada
$productos = [
    ['id' => 1, 'nombre' => 'Producto A', 'precio' => 10.00],
    ['id' => 2, 'nombre' => 'Producto B', 'precio' => 15.00],
    ['id' => 3, 'nombre' => 'Producto C', 'precio' => 8.50],
    ['id' => 4, 'nombre' => 'Producto D', 'precio' => 20.00],
    ['id' => 5, 'nombre' => 'Producto E', 'precio' => 12.75]
];

echo "<h1>Lista de Productos</h1>";
foreach ($productos as $producto) {
    echo "<p>";
    echo htmlspecialchars($producto['nombre']) . " - $" . number_format($producto['precio'], 2);
    echo " <a href='agregar_al_carrito.php?id=" . urlencode($producto['id']) . "'>Añadir al Carrito</a>";
    echo "</p>";
}
?>
