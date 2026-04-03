<?php

include "Notas.html";

$math = $_POST['math'];

$port = $_POST['port'];

$ciencia = $_POST['ciencia'];

$history = $_POST['history'];



$media = ($math + $port + $ciencia + $history) / 4;

if ($media >= 7){
    echo "Aprovado";
}elseif($media >=4 )

echo "Sua media é" . $media;









?>