<?php

include "Notas.html";

echo "<br>LEMBRE-SE DE PREENCHER TODOS OS CAMPOS!";



/* Só um adento pra mim lembrar, "Isset ta peguntando para o php se o valor existe da váriavel existe e se tem memória, "Floatval permite número decimal" */
$math = isset($_POST['math']) ? floatval( $_POST['math']) : 0 ;

$port = isset($_POST['port']) ? floatval($_POST['port']) : 0;

$ciencia = isset($_POST['ciencia']) ? floatval($_POST['ciencia']) : 0;

$history = isset($_POST['history']) ? floatval($_POST['history']) : 0;








$media = ($math + $port + $ciencia + $history) / 4;

if ($media >= 7){
    echo "<p class='resultado'><br> <br > Você está: APROVADO</p>";
}elseif($media <7 && $media >=4 ){
    echo "<p class='resultado'><br> <br>Você está de: RECUPERAÇÃO</p>";
}else{

    echo "<p class='resultado'><br> <br> Você está: REPROVADO</p>";
}
echo "<p class='resultado'><br><br> Sua media é: ". $media ."</p>";









?>