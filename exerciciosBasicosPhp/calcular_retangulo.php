<?php

include "calcular_retangulo.html";


$l1 = $_POST['l1'];
$l2 = $_POST['l2'];

$perimetro = 2 * ($l1 + $l2);

echo "Sua área é:". $l1 * $l2;

echo "Seu perímetro é: $perimetro"





?>