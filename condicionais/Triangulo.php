<?php

include "Triangulo.html"; 

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

if ($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2) {

if ($lado1 == $lado2 && $lado2 == $lado3){
    echo "Triangulo Equilatero";
}
elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
    echo "Triangulo Isósceles";
}
elseif ($lado1 <> $lado2 || $lado1 <> $lado3 || $lado2 <> $lado3){
    echo "Triangulo Escaleno";
}

    }

else {
    echo "Não forma um triângulo";
}





?>