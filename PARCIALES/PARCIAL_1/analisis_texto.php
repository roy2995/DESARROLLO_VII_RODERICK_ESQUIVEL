<?php
include 'utilidades_texto.php';

$frases = [
    "hola mundo.",
    "?astse omoc aloh",
    "programar yo saber"
];

echo "<table border='1'>";
echo "<tr><th>Frase</th><th>Contar Palabras</th><th>Contar Vocales</th><th>Invertir Palabras</th></tr>";

foreach ($frases as $frase) {
    echo "$frase";
    echo  contar_palabras($frase);
    echo  contar_vocales($frase);
    echo  invertir_palabras($frase);
    echo "</tr>";
}

echo "</table>";
?>