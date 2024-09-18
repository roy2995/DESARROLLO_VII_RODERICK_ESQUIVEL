<?php

require 'SistemaGestionEstudiantes.php';

$sistema = new SistemaGestionEstudiantes();

$estudiantes = [
    new Estudiante(1, "Ana López", 20, "Ingeniería"),
    new Estudiante(2, "Carlos Gómez", 22, "Matemáticas"),
    new Estudiante(3, "María Rodríguez", 21, "Ingeniería"),
    new Estudiante(4, "Pedro Martínez", 23, "Física"),
    new Estudiante(5, "Laura García", 20, "Ingeniería"),
    new Estudiante(6, "Luis Pérez", 22, "Matemáticas"),
    new Estudiante(7, "Sofía Romero", 21, "Historia"),
    new Estudiante(8, "Javier Fernández", 23, "Física"),
    new Estudiante(9, "Isabel Jiménez", 20, "Historia"),
    new Estudiante(10, "Andrés Torres", 22, "Ingeniería")
];

foreach ($estudiantes as $estudiante) {
    $estudiante->agregarMateria("Matemáticas", rand(60, 100));
    $estudiante->agregarMateria("Física", rand(60, 100));
    $estudiante->agregarMateria("Historia", rand(60, 100));
    $sistema->agregarEstudiante($estudiante);
}

echo "Lista de estudiantes:\n";
foreach ($sistema->listarEstudiantes() as $estudiante) {
    echo $estudiante . "\n";
}

echo "\nPromedio general de estudiantes: " . number_format($sistema->calcularPromedioGeneral(), 2) . "\n";

echo "\nEstudiantes por carrera (Ingeniería):\n";
foreach ($sistema->obtenerEstudiantesPorCarrera("Ingeniería") as $estudiante) {
    echo $estudiante . "\n";
}

echo "\nMejor estudiante:\n";
echo $sistema->obtenerMejorEstudiante() . "\n";

echo "\nReporte de rendimiento:\n";
print_r($sistema->generarReporteRendimiento());

echo "\nRanking de estudiantes:\n";
foreach ($sistema->generarRanking() as $estudiante) {
    echo $estudiante . "\n";
}

$sistema->graduarEstudiante(1);
echo "\nEstudiantes después de graduar a Ana López:\n";
foreach ($sistema->listarEstudiantes() as $estudiante) {
    echo $estudiante . "\n";
}

$estudiantesEncontrados = $sistema->buscarEstudiantes("María");
echo "\nEstudiantes encontrados con el término 'María':\n";
foreach ($estudiantesEncontrados as $estudiante) {
    echo $estudiante . "\n";
}

$estadisticas = $sistema->estadisticasPorCarrera();
echo "\nEstadísticas por carrera:\n";
foreach ($estadisticas as $carrera => $info) {
    echo "Carrera: $carrera\n";
    echo "  Número de estudiantes: " . $info['cantidad'] . "\n";
    echo "  Promedio general: " . number_format($info['promedio'], 2) . "\n";
    echo "  Mejor estudiante: " . ($info['mejor_estudiante'] ? $info['mejor_estudiante'] : 'N/A') . "\n";
}

?>
