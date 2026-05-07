<?php


include "tabuada.html";

$texNum = $_POST['texNum'];

empty($texNum);

for ($i = 1; $i <=10; $i++){
    $resultado = $texNum * $i;
    echo "<p class = 'resultado'><br> $texNum x $i = ". $resultado ."</p>"  ;
}   
    
?>

