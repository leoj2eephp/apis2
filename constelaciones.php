<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$constelaciones = [
    [
        'id' => 1,
        'nombre' => 'Orion',
        'estrellas' => [
            ['nombre' => 'Betelgeuse', 'tipo' => 'Supergigante roja'],
            ['nombre' => 'Rigel', 'tipo' => 'Supergigante azul'],
            ['nombre' => 'Bellatrix', 'tipo' => 'Gigante azul'],
        ],
    ],
    [
        'id' => 2,
        'nombre' => 'Casiopea',
        'estrellas' => [
            ['nombre' => 'Caph', 'tipo' => 'Estrella doble'],
            ['nombre' => 'Schedar', 'tipo' => 'Gigante naranja'],
            ['nombre' => 'Cih', 'tipo' => 'Estrella doble'],
        ],
    ],
    [
        'id' => 3,
        'nombre' => 'Escorpión',
        'estrellas' => [
            ['nombre' => 'Antares', 'tipo' => 'Supergigante roja'],
            ['nombre' => 'Shaula', 'tipo' => 'Estrella binaria'],
            ['nombre' => 'Lesath', 'tipo' => 'Estrella binaria'],
        ],
    ],
];

echo json_encode($constelaciones);