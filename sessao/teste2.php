<?php 

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
     $nome = $_POST['name'];
    $senha = $_POST['senha'];
    if($nome == $_SESSION['nome'] && $senha == $_SESSION['senha']){
        header("location:tela.html")
    }
    else{
        echo ""
    }
}



?>