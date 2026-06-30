<?php 

session_start();

if(!isset($_SESSION['visita'])){
    $_SESSION['visita'] = 1;
}
else{
    $_SESSION['visita']++;
}

echo "<p>Você visitou ". $_SESSION['visita'] ." visitas</p>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Somar.css"
</head>
<body>
    
</body>
</html>