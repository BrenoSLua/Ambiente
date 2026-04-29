<?php


include "tabuada.html";

$texNum = $_POST['texNum'];

for ($i = 1; $i <=10; $i++){
    $resultado = $texNum * $i;
    echo "<br> $texNum x $i = ". $resultado   ;
}   
    
?>

