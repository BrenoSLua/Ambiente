<?php  

include "calcular_circulo.html"; 

$raio = isset($_POST['raio']) ? floatval($_POST['raio']) : 0;

var_dump($raio); // teste

$area = pi() * $raio * $raio;

echo "<br><br> A área do seu círculo é: $area";

$diametro = 2 * $raio;

echo "<br><br> Seu diâmetro é: $diametro";

?>