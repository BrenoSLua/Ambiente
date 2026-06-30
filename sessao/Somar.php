<?php 

    include "Somar.html";

    session_start();

    if(!isset($_SESSION['number'])){
        $_SESSION['number']=0;

    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $_SESSION['number'] += $_POST['number'];
    }    
    if($_POST['zerar']=='zerar'){
        $_SESSION['number']=0;
    }
     
     echo "<p>".$_SESSION['number']."</p>";
    
    




?>