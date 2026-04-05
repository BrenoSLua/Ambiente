<?php 

include "PositivoNegativo.html";

$number = isset ($_POST['number']) ? floatval($_POST['number']) : 0;

if ($number >0){
    echo "<br>Seu número é positivo";
}elseif ($number <0){
    echo "<br>Seu número é negativo";
}else{
    echo "<br>Seu número é 0";
}

?>