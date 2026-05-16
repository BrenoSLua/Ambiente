<?php

include "desconto.html";

$cod = $_POST['cod'];
$quantidade = $_POST['quantidade'];

$caderno = 15;
$caneta = 2;
$mochila = 120;

switch($cod and $quantidade){
    case $cod == 1 and $quantidade >= 7:
        echo "Você terá 7% de desconto: ". $re = (2 * $quantidade) / 100 * 7;
        echo "<br>O valor total é: ". (2 * $quantidade) - $re;
    case $cod == 1 and $quantidade < 7:
        echo "O valor total é: ". 2 * $quantidade;       
    case $cod == 2 and $quantidade >= 7:
        echo "Você terá 7% de desconto: ". $re1(15 * $quantidade) / 100 * 7;
        echo "<br> O valor taotal é: ". (15 * $quantidade) - $re1

}







?>