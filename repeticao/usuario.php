<?php

include "usuario.html";

$texNum = $_POST['texNum'];

for ( $i = 1;  $i <= $texNum;  $i++ ){
    echo "<br> $i";
}


?>