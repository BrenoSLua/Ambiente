<?php
include "MaiorDeIdade.html";

$idade = $_POST['idade'];

if (empty($idade)){

    echo "Você não digitou sua idade";

}

elseif ($idade >=18) {

    echo "você é de maior";

}
else{
    echo "Você é de menor";
}


?>




