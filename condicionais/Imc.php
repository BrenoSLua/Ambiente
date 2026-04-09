<?php

include "Imc.html"; 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($imc, 2)."<br>";


if ($imc < 18.5){
    echo "<p class='resultado'>Classificação: Abaixo do Peso</p>";
}
elseif ($imc >=18.5 && $imc <= 24.9){
    echo "<p class='resultado'>Classificação: Peso Normal</p>";
}
elseif ($imc >= 25 && $imc <= 29.90){
    echo "<p class='resultado'>classificação: Sobrepeso</p>";
}
else {
    echo "<p class='resultado'>Classificação: Obesidade</p>";
}

    









?>