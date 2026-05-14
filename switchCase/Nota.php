<?php

include 'Nota.html';

$nota = $_POST['notas'];

switch(TRUE){
     case $nota>=0 and $nota<=2;
       echo 'Retido';
       break;
    case $nota>=9 and $nota<=10;
       echo 'MB';
       break;   
    case $nota>=7 and $nota<=8;
       echo 'B';
       break;
    case $nota>=5 and $nota<=6;
       echo 'R';
       break;   
    case $nota>=3 and $nota<=4;
       echo 'I';
       break; 
  
      
    default:
       echo "Opção Inválida"; 
       break;               
}


?>