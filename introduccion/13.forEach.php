<?php

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 25',
        'precio' => 600,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 1200,
        'disponible' => false
    ]
];

foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?> </p>
        <p>Precio: <?php echo "$" . $producto['precio']?></p>
        <p><?php echo $producto['disponible'] ? "Disponible" : "No disponible" ?></p>
    </li>

    <?php
}