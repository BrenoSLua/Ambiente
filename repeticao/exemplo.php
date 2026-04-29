<?php

include "exemplo.html";

$texNum = $_POST['texNum'];

for ( $i = 1;  $i <= $texNum;  $i++ ){
    echo "<br> $i";
}

echo "<br> While";
$i = 1;
while ($i <= $texNum){
    
echo "<br> $i";
    $i++;
}
do{
echo "<br> $i";
$i++;
}while($i<$texNum)



?>