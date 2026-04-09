<?php



include "Imposto.html";

$Imposto = floatval($_POST['Imposto']);

if ($Imposto <= 2259.20) {
    echo "<p class='resultado'>Isento</p>";  

} elseif ($Imposto >= 2259.21 && $Imposto <= 2826.65) {
    $resultado = ($Imposto * 0.075) - 182.16;
    echo "<p class='resultado'>Seu imposto é de: ". number_format($resultado, 2)."</p>";
}
elseif ($Imposto >= 2826.66 && $Imposto <= 3751.05) {
    $resultado1 = ($Imposto * 0.15) - 394.16;
    echo "<p class='resultado'>Seu imposto é de: ". number_format($resultado1, 2)."</p>";
}   
elseif ($Imposto >= 3751.06 && $Imposto <= 4664.68) {
    $resultado2 = ($Imposto * 0.225) - 675.49;
    echo "<p class='resultado'>Seu imposto é de: ". number_format($resultado2, 2)."</p>";
}
elseif ($Imposto > 4644.68) {
    $resultado3 = ($Imposto * 0.275) - 908.73;
    echo "<p class='resultado'>Seu imposto é de: ". number_format($resultado3, 2) ."</p>";
}





?>

