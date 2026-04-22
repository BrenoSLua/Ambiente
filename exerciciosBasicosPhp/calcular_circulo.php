<?php 

include "calcular_circulo.html";

$raio = $_POST['raio'];

$diametro = $raio * 2;
$area = pi() * ($raio * $raio);

echo " <p class = 'resultado'> Seu diâmetro: $diametro <br> Sua área: ". number_format( $area, 2). " </p>";








?>