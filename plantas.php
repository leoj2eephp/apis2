<?php
header('Content-Type: application/json');

$plantas = [
    [
        'id' => 1,
        'tipo' => 'Flor',
        'plantas' => [
            ['id' => 1, 'nombre' => 'Rosa', 'descripcion' => 'Flor ornamental de pétalos rojos'],
            ['id' => 2, 'nombre' => 'Orquídea', 'descripcion' => 'Flor exótica de múltiples colores'],
            ['id' => 3, 'nombre' => 'Tulipán', 'descripcion' => 'Flor bulbosa de primavera'],
        ],
    ],
    [
        'id' => 2,
        'tipo' => 'Planta',
        'plantas' => [
            ['id' => 4, 'nombre' => 'Cactus', 'descripcion' => 'Planta suculenta adaptada a ambientes áridos'],
            ['id' => 5, 'nombre' => 'Helecho', 'descripcion' => 'Planta de sombra, hojas verdes y frondosas'],
            ['id' => 6, 'nombre' => 'Bambú', 'descripcion' => 'Planta de rápido crecimiento, típica de Asia'],
        ],
    ],
    [
        'id' => 3,
        'tipo' => 'Árbol',
        'plantas' => [
            ['id' => 7, 'nombre' => 'Roble', 'descripcion' => 'Árbol de hoja caduca, madera resistente'],
            ['id' => 8, 'nombre' => 'Pino', 'descripcion' => 'Árbol de hoja perenne, conífero'],
            ['id' => 9, 'nombre' => 'Palmera', 'descripcion' => 'Árbol tropical, estípite alto y sin ramas'],
        ],
    ],
];

echo json_encode($plantas);