<?php include "../introduccion/index/header.php" ?>

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

echo "<prev> ";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</prev>"

// foreach($productos as $producto) { ?>
<!-- <li> -->
    <!-- <p>"Nombre" <?php echo  $producto['nombre'] ?></p> -->
<!-- </li>; -->
 <!-- }; -->