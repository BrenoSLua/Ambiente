<?php

include "cem.html";

$texNum = $_POST['texNum'];

echo "<p class ='resultado'>Seu número: $texNum </p>";

$soma = 0;

for($i = 0; $i <100; $i++){

    $soma += ($texNum + $i);

}

echo "<p class ='resultado'>Sua soma: $soma</p>";
?>