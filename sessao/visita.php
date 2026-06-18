<?php 

session_start();

if(!isset($_SESSION['visita'])){
    $_SESSION['visita'] = 1;
}
else{
    $_SESSION['visita']++;
}

echo "Você visitou ". $_SESSION['visita'] ." visitas";


?>