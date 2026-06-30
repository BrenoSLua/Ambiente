<?php

include 'quiz.html';

session_start();

$respostasCorretas = [
    "16",
    "Brasília",
    "Pedro Álvares Cabral", 
    "Azul",
    "Rússia",
    "7",
    "365",
    "Júpiter",
    "15",
    "24"
];
    
$acertos = 0;

for ($i = 1; $i <= 10; $i++) {
    if (strtolower($_POST["$i"]) == $respostasCorretas[$i - 1]) {
        $acertos++;
    }
}

$_SESSION["acertos"] = $acertos;

if ($_SESSION["acertos"] >= 1 && $_SESSION["acertos"] <= 4) {
    echo "<p>Acertou só " . $_SESSION["acertos"] . ", estude mais!</p>";
}
elseif ($_SESSION["acertos"] >= 5 && $_SESSION["acertos"] <= 6) {
    echo "<p>Tá no famoso R passa, acertou " . $_SESSION["acertos"]."</p>";
}
elseif ($_SESSION["acertos"] >= 7 && $_SESSION["acertos"] <= 8) {
    echo "<p>É o famoso cosplay de nerd né, acertou " . $_SESSION["acertos"]."</p>";
}
elseif ($_SESSION["acertos"] >= 9 && $_SESSION["acertos"] <= 10) {
    echo "<p>Tá quase no intercâmbio, acertou " . $_SESSION["acertos"]."</p>";
}
else {
    echo "<p>Não acertou nenhuma.</p>";
}
?>