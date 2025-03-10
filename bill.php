<?php

echo "Enter units consumed : ";
$units = (float)  readline();

if($units <= 100)   {
    $Bill = $units * 5;
}elseif ($units <= 200) {
    $Bill = 100 * 5 + ($units - 100) *10;
}else{
    $Bill = 100*5 + 100 *10 + ($units - 200) *15;
}
echo   "Total bill: tk. "  .$Bill. "\n";