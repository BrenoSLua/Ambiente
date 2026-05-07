<?php

include "usuario.html";

$texNum = $_POST['texNum'];

for ( $i = 1;  $i <= $texNum;  $i++ ){
    echo "<p class = 'resultado'><br> $i</p>";
}


?>