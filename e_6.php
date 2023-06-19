<?php
$data="go to training laravel in GSG";
$firstTwoCahr=substr($data, 0, 2);
if(strtoupper($firstTwoCahr)==="GO"){
    echo "the data start with GO";
}else{
    echo "the data doesn't start with GO";
}


