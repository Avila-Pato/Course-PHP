
<?php
$nombreCliente = "   Juan  ";
echo strlen($nombreCliente); // ver la longitud de la cadena



// Elimian respacion en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Mayusculas
echo strtoupper($texto);

// Minusculas
echo strtolower($texto);

// Primera letra mayuscula
echo ucfirst($texto);

// Primera letra mayuscula de cada palabra
echo ucwords($texto);


// Reemplazar
echo str_replace("a", "e", $texto);

// Encontrar
echo strpos($texto, "u");

$email1 = "t2a9o@example.com";
$email2 = "t2a9o@example.com";

var_dump(strtolower($email1) == strtolower($email2));
echo str_replace("Xing", "x", $email1);


$tipoCliente = "Premium";
$nombreCliente = "Patricio";
$apellidoCliente = "Avila";

echo "El tipo de cliente es: $tipoCliente";
echo "El tipo de cliente es" . $tipoCliente;

echo "El tipo de cliente es: {$tipoCliente}";

echo "El tipo de cliente es: {$tipoCliente} {$nombreCliente} {$apellidoCliente}";




echo strpos($nombreCliente, "Patricio");
