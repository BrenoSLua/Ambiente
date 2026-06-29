<?php 

include "estado.html";

$estado = $_POST['estado'];

switch($estado){
    case $estado>=1 and $estado<=10: // Essa parte se chama 'deem'
        echo '<p>Sei lá, sp?</p>'; 
        break;
    case 11:
        echo '<p>RO</p>';
        break;
    case 12:
        echo '<p>AC</p>';
        break;
    case 13:
        echo '<p>AM</p>';
        break;
    case 14:
        echo '<p>RR</p>';
        break;
    case 15:
        echo '<p>PA</p>';
        break;
    case 16:
        echo '<p>AP</p>';
        break;
    case 17:
        echo '<p>TO</p>';
        break;
    case 21:
        echo '<p>MA</p>';
        break;
    case 22:
        echo '<p>PI</p>';
        break;
    case 23:
        echo '<p>CE</p>';
        break;
    case 24:
        echo '<p>RN</p>';
        break;
    case 25:
        break;
    case 26:
        echo '<p>PE</p>';
        break;
    case 27:
        echo '<p>AL</p>';
        break;
    case 28:
        echo '<p>se</p>';
        break;
    case 29:
        echo '<p>BA</p>';
        break;
    case 31:
        echo '<p>MG</p>';
        break;
    case 32:
        echo '<p>ES</p>';
        break;
    case 33:
        echo '<p>RJ</p>';
        break;
    case 34:
        echo '<p>SP</p>';
        break;
    case 41:
        echo '<p>PR</p>';
        break;
    case 42:
        echo '<p>SC</p>';
        break;
    case 43:
        echo '<p>SC</p>';
        break;
    case 50:
        echo '<p>MS</p>';
        break;
    case 51:
        echo '<p>MT</p>';
        break;
    case 52:
        echo '<p>GO</p>';
        break;
    case 53:
        echo '<p>DF</p>';
        break;
    default:
        echo "<p>opção sei lá</p>";
    break;
}



?>