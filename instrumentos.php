<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$instrumentos = [
    [
        'id' => 1,
        'tipo' => 'Cuerda',
        'instrumentos' => [
            ['id' => 1, 'nombre' => 'Guitarra Acústica', 'descripcion' => 'Instrumento de cuerdas pulsadas'],
            ['id' => 2, 'nombre' => 'Violín', 'descripcion' => 'Instrumento de cuerdas frotadas con arco'],
            ['id' => 3, 'nombre' => 'Ukelele', 'descripcion' => 'Instrumento similar a la guitarra, típico de Hawái'],
        ],
    ],
    [
        'id' => 2,
        'tipo' => 'Viento',
        'instrumentos' => [
            ['id' => 4, 'nombre' => 'Flauta Travesera', 'descripcion' => 'Instrumento de viento-madera'],
            ['id' => 5, 'nombre' => 'Trompeta', 'descripcion' => 'Instrumento de viento-metal'],
            ['id' => 6, 'nombre' => 'Saxofón', 'descripcion' => 'Instrumento de viento-madera con cuerpo cónico'],
        ],
    ],
    [
        'id' => 3,
        'tipo' => 'Percusión',
        'instrumentos' => [
            ['id' => 7, 'nombre' => 'Batería', 'descripcion' => 'Instrumento de percusión compuesto por tambores y platillos'],
            ['id' => 8, 'nombre' => 'Cajón Peruano', 'descripcion' => 'Instrumento de percusión típico de Perú'],
            ['id' => 9, 'nombre' => 'Maracas', 'descripcion' => 'Instrumento de percusión de origen latinoamericano'],
        ],
    ],
];

echo json_encode($instrumentos);