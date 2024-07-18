<?php
header('Content-Type: application/json');

$recetas = [
    [
        'id' => 1,
        'tipo' => 'Italiana',
        'recetas' => [
            ['id' => 1, 'nombre' => 'Spaghetti Bolognese', 'ingredientes' => ['pasta', 'carne picada', 'tomate', 'cebolla', 'ajo']],
            ['id' => 2, 'nombre' => 'Pizza Margherita', 'ingredientes' => ['masa de pizza', 'salsa de tomate', 'mozzarella', 'albahaca']],
            ['id' => 3, 'nombre' => 'Tiramisú', 'ingredientes' => ['bizcochos de soletilla', 'café', 'queso mascarpone', 'cacao en polvo']],
        ],
    ],
    [
        'id' => 2,
        'tipo' => 'Mexicana',
        'recetas' => [
            ['id' => 4, 'nombre' => 'Tacos al Pastor', 'ingredientes' => ['tortillas de maíz', 'carne de cerdo marinada', 'piña', 'cebolla', 'cilantro']],
            ['id' => 5, 'nombre' => 'Guacamole', 'ingredientes' => ['aguacate', 'tomate', 'cebolla', 'limón', 'cilantro']],
            ['id' => 6, 'nombre' => 'Enchiladas Rojas', 'ingredientes' => ['tortillas de maíz', 'pollo deshebrado', 'salsa de chile rojo', 'queso']],
        ],
    ],
    [
        'id' => 3,
        'tipo' => 'Postre',
        'recetas' => [
            ['id' => 7, 'nombre' => 'Brownies de Chocolate', 'ingredientes' => ['chocolate', 'mantequilla', 'azúcar', 'huevos', 'harina']],
            ['id' => 8, 'nombre' => 'Flan de Caramelo', 'ingredientes' => ['huevos', 'leche', 'azúcar', 'vainilla', 'caramelo líquido']],
            ['id' => 9, 'nombre' => 'Cheesecake de Fresa', 'ingredientes' => ['galletas digestive', 'queso crema', 'fresas', 'azúcar', 'gelatina']],
        ],
    ],
];

echo json_encode($recetas);