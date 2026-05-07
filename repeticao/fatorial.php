<?php

include "fatorial.html";

$texNum = $_POST['texNum'];

echo "<p class = 'resultado'>Seu número: $texNum.</p>";

$fatorial = 1;

while($texNum > 1){

    $fatorial = $fatorial * $texNum;
    
    $texNum--;  

    
}


echo " O fatorial é: $fatorial";




?>