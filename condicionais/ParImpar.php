<?php

include "ParImpar.html";

$numero = $_POST['numero'];


if ( empty($numero)){
    echo "<p class='resultado'>Você não digitou um número</p>";


}elseif ($numero % 2 == 0){
    echo "<p class ='resultado'>Seu número é par</p>";
}
else{
    echo "<p class='resultado'>Seu número é ímpar</p>";
}

  /* o EMPTY serve para ver se o usuário digitou algo no campo */  
    
?>

