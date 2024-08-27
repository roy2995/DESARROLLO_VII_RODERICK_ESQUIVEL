<?php
function obtenerLibros() {
    return [
        [
            'titulo' => 'El Quijote',
            'autor' => 'Miguel de Cervantes',
            'anio_publicacion' => 1605,
            'genero' => 'Novela',
            'descripcion' => 'La historia del ingenioso hidalgo Don Quijote de la Mancha.'
        ],
        [
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'anio_publicacion' => 1967,
            'genero' => 'Realismo mágico',
            'descripcion' => 'La novela narra la historia de la familia Buendía en el ficticio pueblo de Macondo.'
        ],
        [
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'anio_publicacion' => 1949,
            'genero' => 'Distopía',
            'descripcion' => 'Una novela sobre un régimen totalitario y el control absoluto del estado sobre sus ciudadanos.'
        ],
        [
            'titulo' => 'El Hobbit',
            'autor' => 'J.R.R. Tolkien',
            'anio_publicacion' => 1937,
            'genero' => 'Fantasía',
            'descripcion' => 'La aventura de Bilbo Baggins, un hobbit que se embarca en una épica misión.'
        ],
        [
            'titulo' => 'Orgullo y prejuicio',
            'autor' => 'Jane Austen',
            'anio_publicacion' => 1813,
            'genero' => 'Romance',
            'descripcion' => 'La historia de Elizabeth Bennet y sus prejuicios hacia el orgulloso Mr. Darcy.'
        ]
    ];
}

// Función para mostrar los detalles de un libro
function mostrarDetallesLibro($libro) {
    return "<div>
                <h3>{$libro['titulo']}</h3>
                <p><strong>Autor:</strong> {$libro['autor']}</p>
                <p><strong>Año de Publicación:</strong> {$libro['anio_publicacion']}</p>
                <p><strong>Género:</strong> {$libro['genero']}</p>
                <p><strong>Descripción:</strong> {$libro['descripcion']}</p>
            </div><hr>";
}
?>
