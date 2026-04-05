<?php

include "ParImpar.html";

$numero = $_POST['numero'];


if ( empty($numero)){
    echo "Você não digitou um número";


}elseif ($numero % 2 == 0){
    echo "Seu número é par ";
}
else{
    echo "Seu número é ímpar";
}

  /* o EMPTY serve para ver se o usuário digitou algo no campo */  
    
?>

