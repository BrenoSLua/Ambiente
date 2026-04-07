<?php

include "calcule_venda.html";

$embalagem = $_POST['embalagem'];

$produto = $_POST['produto'];

$entrega = $_POST['entrega'];

$custo = $embalagem + $produto + $entrega;

$venda = $custo - $produto * (250/100);

$fixo = $embalagem + $entrega;

$lucro = $venda - $custo - $fixo;



echo "<p class='resultado'>O seu custo é de: $custo" ;

echo "<p class='resultado'>sendo o $fixo seu custo fixo</p>" ;

echo "<p class='resultado'>$lucro sendo o valor do lucro </p>";







?>