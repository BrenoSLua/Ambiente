<?php

include "estacionamento.html";

$veiculo = $_POST['veiculo'];
$vaga = $_POST['vaga'];
$plano = $_POST['plano'];
$time = (int)$_POST['time'];


$pagar = 30 + 5 * ($time - 3);

switch($veiculo){
    case "carro":
        if($vaga == "normal"){
            if($plano == "horas" && $time <= 1){
                echo "Você irá pagar: 10 reais";
            }

            elseif($plano == "horas" && $time <= 3){
                echo "Você irá pagar: 30 reais ";
            }
            elseif($plano == "horas" && $time > 3){
                echo "Você irá pagar: $pagar reais.";
            }
            elseif($plano == "diario"){
                 echo "Você irá pagar: 40 reais.";
            }else{
                echo "Você irá pagar: 200 reais.";
            }

        }
         elseif($vaga == "vip"){
            if($plano == "horas"){
                echo "Não sei + o vip";
            }
         }else{
            
         }
      
        
    break;

    case "moto":
        if($vaga == "horas" && $time <= 1){
            

        }
        break;

}




?>