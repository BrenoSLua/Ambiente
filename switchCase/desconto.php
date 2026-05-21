<?php

include "desconto.html";

$cod = $_POST['cod'];
$quantidade = $_POST['quantidade'];

$caderno = 15;
$caneta = 2;
$mochila = 120;

switch(TRUE){
    case $cod == 1 and $quantidade >= 7:
        $re = (2 * $quantidade) / 100 * 7;
        echo "<p>Você terá 7% de desconto: ". $re."</p>";
        echo "<p><br>O valor total com desconto: ". (2 * $quantidade) - $re ."</p>";
        break;

    case $cod == 1 and $quantidade < 7:
        echo "<p>O valor total: ". 2 * $quantidade ."<p>";
    break;    

    case $cod == 2 and $quantidade >= 7:
        $re1 = (15 * $quantidade) / 100 * 7;
        echo "<p>Você terá 7% de desconto: ". $re1 ."</p>";
        echo "<p><br> O valor total com desconto: ". (15 * $quantidade) - $re1 ."</p>";
        break;

    case $cod == 2 and $quantidade < 7:
        echo "<p><br>O valor total : ". 15 * $quantidade ."</p>";
        break;

    case $cod == 3 and $quantidade >= 7:
        $re2 = (120 * $quantidade) / 100 * 7;
        echo "<p>Você tera 7% de desconto: ". $re2."</p>";
        echo "<p><br> O valor total: ". (120 * $quantidade) - $re2 ."</p>";
        break;

    case $cod == 3 and $quantidade < 7:
        echo "<p><br>O valor total é: ". 120 * $quantidade ."</p>";
        break;
        
    default:
        echo "<p>Código inválido!</p>";

}







?>