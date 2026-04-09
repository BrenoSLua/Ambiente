<?php
include "MaiorDeIdade.html";

$idade = $_POST['idade'];

if (empty($idade)){

    echo "<p class='resultado'>Você não digitou sua idade</p>";

}

elseif ($idade >=18) {

    echo "<p class='resultado'>você é de maior</p>";

}
else{
    echo "<p class='resultado'>Você é de menor</p>";
}


?>




