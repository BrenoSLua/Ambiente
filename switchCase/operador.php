<?php 

include 'operador.html';

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];

switch($n1 and $n2){
    case $op == '+':
        echo "<p>".$n1 + $n2."</p>";
        break;
    case $op == '*':
        echo "<p>".$n1 * $n2."</p>";
        break;
    case $op == '/':
        echo "<p>". $n1 / $n2."</p>";
        break; 
    case $op == '%':
        echo "<p>"($n1 / 100) * $n2."</p>"; 
        break;
    default:
        echo "<p>Operação inválida</p>";
        break;


}















?>