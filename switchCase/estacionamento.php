<?php

include "estacionamento.html";

$veiculo = $_POST['veiculo'];
$vaga = $_POST['vaga'];
$plano = $_POST['plano'];
$time = (int)$_POST['time'];


$pagar = 30 + 5 * ($time - 3);
$pagar1 =  15 + 2 * ($time - 3);
$pagar2 = 60 + 10 * ($time - 3);

switch($veiculo){
    case "carro":
        if($vaga == "normal"){
            if($plano == "horas" && $time <= 1){
                echo "<p>Você irá pagar: 10 reais</p>";
            }

            elseif($plano == "horas" && $time <= 3){
                echo "<p>Você irá pagar: 30 reais</p>";
            }
            elseif($plano == "horas" && $time > 3){
                echo "<p>Você irá pagar: $pagar reais.</p>";
            }
            elseif($plano == "diario"){
                 echo "<p>Você irá pagar: 40 reais.</p>";
            }else{
                echo "<p>Você irá pagar: 200 reais.</p>";
            }

        }
         elseif($vaga == "vip"){
            if($plano == "horas"){
                echo "<p>canacelado o vip</p>";
            }
         }else{
            
         }
      
        
    break;



    case "moto":
        if($vaga == "normal"){
            if($plano == "horas" && $time <= 1){
            echo "<p>Você irá pagar: 5 reais.</p>";

            }
            elseif($plano == "horas" && $time <=3){
                echo "<p>Você irá pagar: 10 reais.</p>";
            }
            elseif($plano == "horas" && $time > 3){
                echo "<p>Você irá pagar: $pagar1 reais</p>";
            }
            elseif($plano == "diario"){
                echo "<p>Você irá pagar: 25 reais</p>";
            }
            else{
                echo "<p>Você irá pagar: 100 reais</p>";
            }
        
    
        }
        elseif($vaga == "vip"){
           if($plano == "horas" && $time <= 1){
            echo "<p>Valor vip</p>";

           } 
        }
       // mais codicionais 

        
        break;

    case "caminhao":
        if ($vaga == "normal"){
            if($plano == "horas" && $time <= 1){
                echo "<p>Você irá pagar: 20 reais.</p>";
            }

        elseif($plano == "horas" && $time <= 3){
            echo "<p>Você irá pagar: 40 reais.</p>";
        }
        elseif($plano == "horas" && $time > 3){
            echo "<p>Você irá pagar: $pagar2 reais.</p>";
        }
        elseif($plano == "diario"){
            echo "<p>Você irá pagar: 80 reais</p>";
        }
        else{
            echo "<p>Você irá pagar: 500 reais</p>";
        }
     }
}




?>