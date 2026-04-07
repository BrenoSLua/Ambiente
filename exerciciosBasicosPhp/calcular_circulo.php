<?php  

include "calcular_circulo.html"; 

/* Só um pra mim lembrar, "Isset ta peguntando para o php se o valor existe da váriavel existe e se tem memória, "Floatval permite número decimal" */

$raio = isset($_POST['raio']) ? floatval($_POST['raio']) : 0;



$area = pi() * $raio * $raio;

echo "<br><br><p class='resultado'>A área do seu círculo é: $area </p>";

$diametro = 2 * $raio;

echo "<br><br><p class='resultado'>Seu diâmetro é: $diametro </p>";

?>