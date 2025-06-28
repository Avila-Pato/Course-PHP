
<?php include "./index/header.php";  ?>

<?php


$cliente = [
    'nombre' => 'Patricio',
    'saldo' => 200,
    'informaciob' => [
        'telefono' => '5555555',
        'ciudad' => 'Monterrey'
    ]
];

// echo $cliente['informaciob']['telefono'];
echo "</pre>";
echo var_dump($cliente['informaciob']);
echo "</pre>";

