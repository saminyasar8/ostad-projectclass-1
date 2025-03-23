<?php
function terminalSalarySheet(){
    echo "your step(1/2/3)";
    $yourstep = (int)readline();
    if($yourstep===1){
        $baisc =10000;
    }elseif($yourstep=== 2){
        $baisc =8000;
    }elseif($yourstep=== 3){
        $baisc =5000;
    }else{
        echo "invalite sheet! 1/2 or 3 \n ";
        return;
    }

    
    echo " Enter the Bonuse : ";
    $bonuse = (int)readline();
    echo "Enter the deduction :";
    $diducation =(int)readline();
    
    $netsalery = ($baisc + $bonuse - $diducation);
    echo"=============Salery shit =================";
    echo "steep : $yourstep \n ";
    echo "Your baisc Salert : {$baisc} tk\n";
    echo "your bonuse is    : {$bonuse} tk \n";
    echo "you dedection is  : {$diducation} tk\n ";
    echo "----------------------------------\n";
    echo "   your not salery: {$netsalery} tk\n";
    echo "================================================";


}
terminalSalarySheet();