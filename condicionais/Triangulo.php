<?php

include "Triangulo.html"; 

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

if ($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2) {

if ($lado1 == $lado2 && $lado2 == $lado3){
    echo "<p class='resultado'>Triangulo Equilatero</p>";
}
elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
    echo "<p class='resultado'>Triangulo Isósceles</p>";
}
elseif ($lado1 <> $lado2 || $lado1 <> $lado3 || $lado2 <> $lado3){
    echo "<p class='resultado'>Triangulo Escaleno</p>";
}

    }

else {
    echo "<p class='resultado'>Não forma um triângulo</p>";
}






?>