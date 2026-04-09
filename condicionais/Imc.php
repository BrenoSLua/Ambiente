<?php

include "atividade7.html"; 

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($imc, 2)."<br>";


if ($imc < 18.5){
    echo "Classificação: Abaixo do Peso";
}
elseif ($imc >=18.5 && $imc <= 24.9){
    echo "Classificação: Peso Normal";
}
elseif ($imc >= 25 && $imc <= 29.90){
    echo "classificação: Sobrepeso";
}
else {
    echo "Classificação: Obesidade";
}

    









?>