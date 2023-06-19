<?php
$data = "my name is suhimy";
 $firstTowChar=substr($data,0,2);
 $lastTowChar=substr($data,-2,2);

 if($firstTowChar==$lastTowChar){
    echo "equal";
 }else{
    echo "not equal";
 }

