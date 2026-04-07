<?php

include "calcule_venda.html";

$embalagem = $_POST['embalagem'];

$produto = $_POST['produto'];

$entrega = $_POST['entrega'];

$venda = $produto * (250/100);

$fixo = $embalagem * $entrega;

$custo = $embalagem + $produto + $embalagem;

$lucro = $venda - $custo - $fixo;

echo "O seu custo é de: $custo, sendo o $fixo seu custo fixo, e $lucro sendo o valor do lucro";







?>