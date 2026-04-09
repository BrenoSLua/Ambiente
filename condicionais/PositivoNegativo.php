<?php 

include "PositivoNegativo.html";

$number = isset ($_POST['number']) ? floatval($_POST['number']) : 0;

if ($number >0){
    echo "<p class='resultado'><br>Seu número é positivo </p>";
}elseif ($number <0){
    echo "<p class='resultado'><br>Seu número é negativo</p>";
}else{
    echo "<p class='resultado'><br>Seu número é 0</p>";
}

?>