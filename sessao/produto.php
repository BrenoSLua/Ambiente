<?php 

include "produto.html";

session_start();


if(!isset($_SESSION['lista'])){
     $_SESSION['lista'] = array();

}
$produto = $_POST['produto'];

$_SESSION['lista'][] = $produto;

foreach($_SESSION['lista'] as $objt){
    echo "<br>".$objt;
}


?>

