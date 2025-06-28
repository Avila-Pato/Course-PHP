<?php

$autentificado = true;
$admin = false;

if ($autentificado && $admin) {
    echo "Es admin";
} else if ($autentificado) {
    echo "Es usuario autentificado";
} else {
    echo "No esta autentificado";
}


//IF aniodados 
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informaciob' => [
        'telefono' => '5555555',
        'ciudad' => 'Monterrey'
    ]
];

echo "</br>";

if(!empty($cliente)) {
    echo "El arreglo del cliente noe sta vacio";
    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "El cliente no tiene saldo";
    }
};

echo "</br>";

// elif 

if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informaciob']['ciudad'] === 'Monterrey') {
    echo "El cliente es de Monterrey";
} else {
    echo "El cliente no tiene saldo";
};

//Switch
echo "</br>";


$texnologia = "JavasCript";

switch($texnologia) {
    case "PHP":
        echo "PHP";
    case "JavasCript":
        echo "JavasCript";
    case "Python":
        echo "Python";
    default:
        echo "No se encontro la tecnologia";
}



