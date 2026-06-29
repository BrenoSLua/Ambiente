<?php

include 'Nota.html';

$nota = $_POST['notas'];

switch(TRUE){
     case $nota>=0 and $nota<=2;
       echo '<p>Retido</p>';
       break;
    case $nota>=9 and $nota<=10;
       echo '<p>MB</p>';
       break;   
    case $nota>=7 and $nota<=8;
       echo '<p>B</p>';
       break;
    case $nota>=5 and $nota<=6;
       echo '<p>R</p>';
       break;   
    case $nota>=3 and $nota<=4;
       echo '<p>I</p>';
       break; 
  
      
    default:
       echo "<p>Opção Inválida</p>"; 
       break;               
}


?>