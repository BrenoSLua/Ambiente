<?php

include "Semana.html";

$numero = $_POST['Semana'];

if ($numero == 1) {
    echo "<p class='resultado'>Domingo - Fim de semana</p>";
} elseif ($numero == 2) {
    echo "<p class='resultado'>Segunda-feira - Dia útil</p>";
} elseif ($numero == 3) {
    echo "<p class='resultado'>Terça-feira - Dia útil</p>";
} elseif ($numero == 4) {
    echo "<p class='resultado'>Quarta-feira - Dia útil</p>";
} elseif ($numero == 5) {
    echo "<p class='resultado'>Quinta-feira - Dia útil</p>";
} elseif ($numero == 6) {
    echo "<p class='resultado'>Sexta-feira - Dia útil</p>";
} elseif ($numero == 7) {
    echo "<p class='resultado'>Sábado - Fim de semana</p>";
} else {
    echo "<p class='resultado'>Número inválido</p>";
}
?>