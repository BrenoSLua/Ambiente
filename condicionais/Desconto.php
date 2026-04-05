<?php 

include "Desconto.html";


$valor = isset ($_POST['valor']) ? floatval($_POST['valor']) : 0;


$desconto1 = 5;

$desconto2 = 10;

$desconto3 = 15;

$desconto4 = 20;


if ($valor >500 && $valor <= 1000){

     $descontoFinal1 = $valor * ($desconto1 / 100);


    echo "<br> Seu valor da sua compra é ". $valor . "<br><br>Valor do seu desconto é ". $desconto1. "%". 
    "<br><br>Valor total da compra é: ". $valor - $descontoFinal1; 

} 







?>