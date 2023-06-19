<?php
$number_1=29;
$number_2=21;
if(($number_1>=20&&$number_1<=30)&&($number_2>=20&&$number_2<=30)){
        if($number_1>$number_2){
            echo "the number_1 larger than number_2";
        }else if($number_2>$number_1){
            echo "the number_2 larger than number_1";
        }else if($number_1==$number_2){
            echo "equal";
        }
}else{
echo "One of the numbers did not meet the conditions => { 0 }";
}