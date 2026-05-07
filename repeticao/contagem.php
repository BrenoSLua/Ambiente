<?php

include "contagem.html";

$texNum = $_POST['texNum'];


$i = 0 ;
while( $i < $texNum){
    echo "<p class = 'resultado'>". $i ."<br></p>";
    $i++;
}







?>