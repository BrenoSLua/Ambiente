<?php
    $senha = $_POST["senha"];
    $login = $_POST["login"];


if($login == "admin" && $senha == "senha123"){
    echo "Acesso Liberado";
}else{
    echo "Acesso Negado";
    echo "<br><a href='atividade6.html'>Visite o Site</a>";
}
    

?>