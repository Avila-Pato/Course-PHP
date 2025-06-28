<?php

function returnAuth(bool $autenticado) : ?string { // puede se un string
    if($autenticado) {
        return "El usuario esta autentificado";
    } else {
        return null;
    }
};

// string\int // Puede retornar un string o un entero
$usuario = $returnAuth(true);
echo $usuario;
