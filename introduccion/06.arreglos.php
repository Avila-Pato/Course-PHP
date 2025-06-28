<!-- arreglos indexados -->
<?php

// Python tiene 2 tipos de arreglos
$colores = ["rojo", "verde", "azul"];
$colores = array("rojo", "verde", "azul"); 

echo"</pre>";
var_dump($colores);
echo"</pre>";

var_dump($colores[0]); //ACCEDER A SOLO  1 VALOR 


//agregar UN ELEMENTO al ARRAY

$colores[3] = "amarillo";
var_dump($colores);

// agregar un neuvo elemento al final
array_push($colores, "negro");
var_dump($colores);


// agregar un neuvo elemento al inicio
array_unshift($colores, "negro");
var_dump($colores);

// eliminar un neuvo elemento al inicio
array_shift($colores);
var_dump($colores);

// eliminar un neuvo elemento al final
array_pop($colores);
var_dump($colores);






// <!-- arreglos asociativos -->