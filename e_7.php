<?php

$number=21;
$isPositive=$number>0?true:false;
$isMultipleOf_3=$number%3==0?true:false;
$isMultipleOf_7=$number%7==0?true:false;

if($isPositive&&($isMultipleOf_3||$isMultipleOf_7)){
    echo "The number is verified";
 }else{
    echo "The number is not met";
 }
