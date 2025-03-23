<?php
function generateBill() {
    echo "Enter your Prodactor name :";
    $yourProdactor =(int)readline();

    echo"Enter the price :";
    $Price = (float)readline();
    
    echo "Enter quantity : ";
    $quantity = (int)readline();    

    echo "Enter service charge : ";
    $servicecharge = (int)readline(); 
    
    $Totalbill = ( $yourProdactor +$Price + $servicecharge  * $quantity );
    echo"      Ah shop             ";
    echo "=========Bill list=========   \n";
    echo "your Prodactor name is :- {$yourProdactor} \n";
    echo "your Prodactor Price is:- {$Price} tk \n";
    echo "your Prodactor is :- { $quantity} \n";
    echo "Enter service charge is:-{$servicecharge}\n";
    echo "YOUR TOTALL BILL IS: {$Totalbill} tk\n";


}

 generateBill();