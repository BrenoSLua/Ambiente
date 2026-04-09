<?php 

include "Desconto.html";


$valor = isset ($_POST['valor']) ? floatval($_POST['valor']) : 0;


$desconto1 = 5;

$desconto2 = 10;

$desconto3 = 15;

$desconto4 = 20;

$desconto5 = 30;


if ($valor >500 && $valor <= 1000){

     $descontoFinal1 = $valor * ($desconto1 / 100);


    echo "<p class='resultado'><br> Seu valor da sua compra é ". $valor . "<br><br>Valor do seu desconto é ". $desconto1. "%". 
    "<br><br>Valor total da compra é: ". ($valor - $descontoFinal1). "</p>"; 

} elseif ($valor >1000 && $valor <=5000){
    $descontoFinal2 = $valor * ($desconto2 / 100);


    echo "<p class='resultado'><br> Seu valor da sua compra é ". $valor . "<br><br>Valor do seu desconto é ". $desconto2. "%". 
    "<br><br>Valor total da sua compra é ". ($valor - $descontoFinal2) ."</p>";


}elseif ($valor >5000 && $valor <=10000){
    $descontoFinal3 = $valor * ($desconto3 / 100);

    echo "<p class='resultado'><br> Valor da sua compra é ". $valor . "<br><br>Valor do seu desconto é ". $desconto3. "%". 
    "<br><br> Valor final é: ". ($valor - $descontoFinal3) ."</p>";


}elseif ($valor >10000 && $valor <=30000){
    $descontoFinal4 = $valor * ($desconto4 / 100);

    echo "<p class='resultado'><br> Valor da sua compra inicia é ". $valor . "<br><br>Valor do seu desconto é ". $desconto4. "%". 
    "<br><br> valor final é: ". ($valor - $descontoFinal4) . "</p>";


}elseif ($valor >30000){
    $descontoFinal5 = $valor * ($desconto5 / 100);
    
    echo "<p class='resultado'><br> Valor inical da sua compra é: ". $valor . "<br><br>Valor do seu desconto é: ". $desconto5. "%". 
     "<br><br> valor final é: ". ($valor - $descontoFinal5) . "</p>";
}else{
    echo "<p class='resultado'>Não tem desconto, esse é o seu valor: ". $valor. "</p>";
}







?>