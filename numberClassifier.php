<?php
echo "Enter a number : ";
 
$number = (int)readline();

if ($number > 0) {
    echo "this number is positive.\n" ;
}elseif($number < 0){
    echo"this number is negative.\n";
}else{
    echo "this number is zero.\n";
}