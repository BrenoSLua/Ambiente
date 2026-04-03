<?php

include "ParImpar.html";

$numero = $_POST['par'];


if ($numero / 2 == 0){
    echo "é PAR";


}
else{
    echo "N";
}

?>