<?php

$n1=10;
$n2=20;
$n3=15;
$n_helper=0;

if($n1>$n2){
    $n_helper=$n1;
}else{
    $n_helper=$n2;
}

if($n_helper>$n3){
    echo $n_helper;
}else{
    echo $n3 ;
}
