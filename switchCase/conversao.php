<?php

include "conversao.html";

$valor = $_POST['valor'];
$con = $_POST['con'];

$f = ($valor * 9 / 5) + 32;
$c = ($valor - 32) * 5 / 9;
$m = $valor * 0.621371;
$km = $valor * 1.60934;
$l = $valor * 2.20462;
$kg = $valor * 0.453592;


switch(TRUE){
    case $con == "1":
        echo "<p>O valor inicial em celsius: $valor e o resultado: $f Fahrenheit </p>";
    break;

    case $con == "2":
        echo "<p>O valor inical em Fahrenheit: $valor e o resultado: $c Celsius </p>";
    break;

    case $con == "3":
        echo "<p>O valor inicial em Km: $valor e o resultado: $m Milhas</p>";
    break;

    case $con == "4":
        echo "<p>O valor inicial em Milhas: $valor e o resultado: $km Km</p>";
    break;
    
    case $con == "5":
        echo "<p>O valor inicial em Kg: $valor e o resultado: $l Libras</p>";
    break;
    
    case $con == "6":
        echo "<p>O valor inicial em Libras: $valor e o resultado: $kg Kg</p>";
    break;    

    default:
        echo "<p>NÃO TEM ESSA OPÇÃO!</p>";


}





?> 