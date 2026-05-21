<?php

include "estacionamento.html";

$veiculo = $_POST['veiculo'];
$vaga = $_POST['vaga'];
$plano = $_POST['plano'];
$time = $_POST['time'];

switch($veiculo){
    case "carro":
        if($vaga == "normal"){
            if($plano == "horas" and $time <= 1){
                echo "Você irá pagar: 10 reais";
            }
            elseif($plano == "horas" and $time = 3){
                echo "Você irá pagar: 30 reais ";
            }
            elseif($plano == "horas" and $time > 3){
                echo "Você irá pagar: ". ;
            }


        }
         else{
            echo "oi";
         }
      
        
    break;
}




?>