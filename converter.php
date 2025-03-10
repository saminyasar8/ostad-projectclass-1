<?php

define("FACTOR", 9/5);

define("OFFSET", 32);

echo "Temperature value: ";

$temparature = readline();

if (empty($temparature)) {

    echo "Temperature is required!\n";

    exit; 

}

$temparature = (float)$temparature;

echo "Convert to (1: Fahrenheit, 2: Celsius): ";

$choice = (int) readline();

switch ($choice) {

    case 1:

        $result = $temparature * FACTOR + OFFSET;

        echo "Temperature in Fahrenheit: $result \n";

        break;

    case 2:

        $result = ($temparature - OFFSET) / FACTOR;

        echo "Temperature in Celsius: $result \n";

        break;

    default:

        echo "Invalid choice \n";

        break;

}


