<?php

include "fatorial.html";

$texNum = $_POST['texNum'];

$fatorial = 1;

while($texNum > 1){

    $fatorial = $fatorial * $texNum;
    
    $texNum--;  
}

echo "Fatorial: $fatorial";





?>