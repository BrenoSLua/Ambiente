<?php


    $senha = $_POST["senha"];
    $login = $_POST["login"];


if($login == "admin" && $senha == "senha123"){
    echo "<p class='resultado'>Acesso Liberado</p>";
}else{
    echo "<p calss='resultado'>Acesso Negado</p>";
    echo "<p class='voltar'><br><a href='LoginSenha.html'>Visite o Site<a>";
}
    

?>