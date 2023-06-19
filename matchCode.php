<?php


$name="ahmed";

$result=match($name){
    "suhiab"=>"my name",
    "ahmed"=>"frind name",
    default =>"not found",
};
echo $result;