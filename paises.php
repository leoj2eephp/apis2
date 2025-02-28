<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$paises = [
    [
        'id' => 1,
        'nombre' => 'Estados Unidos',
        'capital' => 'Washington D.C.',
        'datos' => [
            'poblacion' => '331 millones',
            'idioma' => 'Inglés',
            'moneda' => 'Dólar',
        ],
    ],
    [
        'id' => 2,
        'nombre' => 'Francia',
        'capital' => 'París',
        'datos' => [
            'poblacion' => '67 millones',
            'idioma' => 'Francés',
            'moneda' => 'Euro',
        ],
    ],
    [
        'id' => 3,
        'nombre' => 'Australia',
        'capital' => 'Canberra',
        'datos' => [
            'poblacion' => '25 millones',
            'idioma' => 'Inglés',
            'moneda' => 'Dólar australiano',
        ],
    ],
];

echo json_encode($paises);