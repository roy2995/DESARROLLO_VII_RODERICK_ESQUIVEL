<?php
include 'funciones_tienda.php';

$productos = [
    'camisa' => 50,
    'pantalon' => 70,
    'zapatos' => 80,
    'calcetines' => 10,
    'gorra' => 25
];

$carrito = [
    'camisa' => 2,
    'pantalon' => 1,
    'zapatos' => 1,
    'calcetines' => 3,
    'gorra' => 30
];

$subtotal = 0;

echo "<h2>Resumen de la Compra</h2>";
echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th></tr>";

foreach ($carrito as $producto => $cantidad) {
    if ($cantidad > 0) {
        $precio = $productos[$producto];
        $subtotal_producto = $precio * $cantidad;
        $subtotal += $subtotal_producto;

        echo "<tr>";
        echo $producto;
        echo $cantidad;
        echo $precio;
        echo $subtotal_producto;
        echo "</tr>";
    }
}

$descuento = calcular_descuento($subtotal);
$impuesto = aplicar_impuesto($subtotal - $descuento);
$total = calcular_total($subtotal, $descuento, $impuesto);

echo "</table>";

echo "<p>Subtotal: $$subtotal</p>";
echo "<p>Descuento: $$descuento</p>";
echo "<p>Impuesto: $$impuesto</p>";
echo "<h3>Total a pagar: $$total</h3>";
?>