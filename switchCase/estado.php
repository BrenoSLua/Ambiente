<?php 

include "estado.html";

$estado = $_POST['estado'];

switch($estado){
    case $estado>=1 and $estado<=10: // Essa parte se chama 'deem'
        echo 'Sei lá, sp?'; 
        break;
    case 11:
        echo 'RO';
        break;
    case 12:
        echo 'AC';
        break;
    case 13:
        echo 'AM';
        break;
    case 14:
        echo 'RR';
        break;
    case 15:
        echo 'PA';
        break;
    case 16:
        echo 'AP';
        break;
    case 17:
        echo 'TO';
        break;
    case 21:
        echo 'MA';
        break;
    case 22:
        echo 'PI';
        break;
    case 23:
        echo 'CE';
        break;
    case 24:
        echo 'RN';
        break;
    case 25:
        echo 'PB';
        break;
    case 26:
        echo 'PE';
        break;
    case 27:
        echo 'AL';
        break;
    case 28:
        echo 'se';
        break;
    case 29:
        echo 'BA';
        break;
    case 31:
        echo 'MG';
        break;
    case 32:
        echo 'ES';
        break;
    case 33:
        echo 'RJ';
        break;
    case 34:
        echo 'SP';
        break;
    case 41:
        echo 'PR';
        break;
    case 42:
        echo 'SC';
        break;
    case 43:
        echo 'SC';
        break;
    case 50:
        echo 'MS';
        break;
    case 51:
        echo 'MT';
        break;
    case 52:
        echo 'GO';
        break;
    case 53:
        echo 'DF';
        break;
    default:
        echo "opção sei lá";
    break;
}



?>