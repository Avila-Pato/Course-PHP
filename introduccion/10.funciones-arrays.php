<?php include "./index/header.php";  ?>

<?php

$carrito = ["Teclado", "Mouse", "Monitor"];

var_dump(in_array("Teclado", $carrito)); // esta el elemento en el array
var_dump(in_array("MonitorDoble", $carrito)); // esta el elemento en el array

// Ordenar elementos de una rreglo

$numeros = array(3,4,32,1,2,33);

sort(($numeros)); // Ordena de menor a mayor
rsort(($numeros)); // Ordena de mayor a menor
var_dump($numeros);

echo "<prev>";
var_dump($numeros);
echo "</prev>";


// Ordenar arreglo asociativos
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informaciob' => [
        'telefono' => '5555555',
        'ciudad' => 'Monterrey'
    ]
];
asort($cliente); //asort ordena por valores
arsort($cliente); //arsort ordena por valores
ksort($cliente); // ksort ordena por claves
krsort($cliente); // krsort ordena por claves  por orden alfabetico


echo "<prev>";
var_dump($cliente);
echo "</prev>";
