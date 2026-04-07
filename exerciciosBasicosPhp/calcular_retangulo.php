<?php

include "calcular_retangulo.html";


$l1 = $_POST['l1'];
$l2 = $_POST['l2'];

$perimetro = 2 * ($l1 + $l2);

echo "<br><p class='resultado'>Sua área é: ". $l1 * $l2 ."</p>";

echo "<br><p class='resultado'>Seu perímetro é: $perimetro</p>"





?>