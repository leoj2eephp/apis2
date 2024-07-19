<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$animales = [
    [
        'id' => 1,
        'tipo' => 'Mamíferos',
        'animales' => [
            ['id' => 1, 'nombre' => 'León', 'caracteristicas' => 'Carnívoro, vive en manadas en África'],
            ['id' => 2, 'nombre' => 'Elefante', 'caracteristicas' => 'Herbívoro, tiene trompa y grandes orejas'],
            ['id' => 3, 'nombre' => 'Oso Panda', 'caracteristicas' => 'Omnívoro, originario de China'],
        ],
    ],
    [
        'id' => 2,
        'tipo' => 'Aves',
        'animales' => [
            ['id' => 4, 'nombre' => 'Águila', 'caracteristicas' => 'Rapaz, excelente visión y vuelo poderoso'],
            ['id' => 5, 'nombre' => 'Colibrí', 'caracteristicas' => 'Pequeño, se alimenta de néctar y polen'],
            ['id' => 6, 'nombre' => 'Pingüino Emperador', 'caracteristicas' => 'Ave marina, adaptada al frío extremo'],
        ],
    ],
    [
        'id' => 3,
        'tipo' => 'Reptiles',
        'animales' => [
            ['id' => 7, 'nombre' => 'Tortuga Marina', 'caracteristicas' => 'Acuática, caparazón resistente'],
            ['id' => 8, 'nombre' => 'Cobra', 'caracteristicas' => 'Veneno potente, serpiente de Asia y África'],
            ['id' => 9, 'nombre' => 'Iguana', 'caracteristicas' => 'Reptil herbívoro, escamas prominentes'],
        ],
    ],
];

echo json_encode($animales);