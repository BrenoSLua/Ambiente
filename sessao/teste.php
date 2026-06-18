<?php
 include 'teste.html';
  session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
 session_start();
 $nome = $_POST['name'];
 $senha = $_POST['senha'];
$_SESSION['nome'] = $nome;
$_SESSION['senha'] = $senha;

header("location:teste2.html");

}
?>