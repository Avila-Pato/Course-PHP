<?php


// $i = 0;

// while($i < 10){
//     echo $i . "</br>";
//     $i++;
// }
// echo "</br>";

// do {
//     echo $i . "</br>";
//     $i++;
// } while($i < 10);

//For loops
echo "</br>";

for($i = 1; $i < 20; $i++){
     if($i % 3 == 0  && $i % 6 == 0 ) {
        echo "FizzBuzz" .  "<br/>";
     } elseif($i % 2 == 0) {
        echo "Fizz" .  "<br/>";
     } elseif($i % 3 ==0 ){
        echo "Buzz" .  "<br/>";
     }
}

$clientes = ["pedro", "juan", "diego"];

foreach($clientes as $cliente){
    echo $cliente . "<br/>";
}

$cliente = [
    'nombre' => "pato",
    'apellido' => "avila",
    'edad' => 20
];
foreach($cliente as $key => $valor):
    echo $key . "-" . $valor . "<br/>";
endforeach;

