<?php
header('Content-Type: application/json');

$videojuegos = [
    [
        'id' => 1,
        'genero' => 'Acción',
        'juegos' => [
            ['id' => 1, 'titulo' => 'Grand Theft Auto V', 'plataforma' => ['PC', 'PS4', 'Xbox One']],
            ['id' => 2, 'titulo' => 'Call of Duty: Warzone', 'plataforma' => ['PC', 'PS4', 'Xbox One']],
            ['id' => 3, 'titulo' => 'Assassin\'s Creed Valhalla', 'plataforma' => ['PC', 'PS4', 'PS5', 'Xbox One', 'Xbox Series X']],
        ],
    ],
    [
        'id' => 2,
        'genero' => 'Aventura',
        'juegos' => [
            ['id' => 4, 'titulo' => 'The Legend of Zelda: Breath of the Wild', 'plataforma' => ['Nintendo Switch']],
            ['id' => 5, 'titulo' => 'Uncharted 4: A Thief\'s End', 'plataforma' => ['PS4']],
            ['id' => 6, 'titulo' => 'The Last of Us Part II', 'plataforma' => ['PS4']],
        ],
    ],
    [
        'id' => 3,
        'genero' => 'RPG',
        'juegos' => [
            ['id' => 7, 'titulo' => 'The Witcher 3: Wild Hunt', 'plataforma' => ['PC', 'PS4', 'Xbox One']],
            ['id' => 8, 'titulo' => 'Final Fantasy VII Remake', 'plataforma' => ['PS4']],
            ['id' => 9, 'titulo' => 'Persona 5', 'plataforma' => ['PS4']],
        ],
    ],
];

echo json_encode($videojuegos);