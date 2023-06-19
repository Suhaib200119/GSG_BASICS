<?php

$numberInt = 190;
$sum=0;
$numberStr=(String) $numberInt;
for ($i=0; $i < strlen($numberStr); $i++) { 
    $nInt=(int) $numberStr[$i];
    $sum=$sum+$nInt;
}

echo "Sum : $sum";