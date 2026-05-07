<?php


include "pares.html";

$texNum = $_POST['texNum'];

for ($i = 0; $i <=$texNum; $i++){
    
    echo  "<p class = 'resultado'><br>". $i * 2 ."</p>";

}   
 

?>





