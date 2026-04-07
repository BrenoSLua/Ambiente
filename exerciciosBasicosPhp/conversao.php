<?php

include"conversao.html";

$real =  $_POST['real'];

$dolar = 5.16;
$euro = 5.97;
$yens = 0.033;

$valor_dolar = $real/$dolar;
$valor_euro = $real/$euro;
$valor_yens = $real/$yens;



echo "<br><br><p  class='resultado'> Valor em real: $real". "</p>";

echo "<br><p class='resultado'> Em dólar: ". number_format($valor_dolar, 2). "</p>";
echo "<br><p class='resultado'>Em euro: ". number_format($valor_euro, 2). "</p>";
echo "<br><p class='resultado'>Em yens: ". number_format($valor_yens, 2). "</p>";









?>

