<?php

echo "Math Mark is: ";
$math = (int) readline();

echo "English Mark is: ";
$english = (int) readline();

echo "Bangla Mark is: ";
$bangla = (int) readline();

echo "Arabic Mark is: ";
$arabic = (int) readline();
echo "science Mark is: ";
$arabic = (int) readline();

echo "History Mark is: ";
$history = (int) readline();

function myMark($math, $english, $bangla, $arabic, $history, $science) {
    $allMarks = $math + $english + $bangla + $arabic + $history + $science;
    $average = $allMarks / 5;

    echo "Your Total Marks: $allMarks\n";
    echo "Your Average Marks: $average\n";

    if ($average >= 80) {
        echo "You Have Achieved A+\n";
    } elseif ($average >= 70) {
        echo "You Have Achieved A\n";
    }elseif ($average >= 60) {
        echo "You Have Achieved A-\n";

    }elseif ($average >= 50) {
        echo "You Have Achieved B\n";
    }elseif ($average >= 45) {
        echo "You Have Achieved c\n";
    }elseif ($average >= 42) {
        echo "You Have avarage pass C-\n";
    }
     else {
        echo "You Are Failed\n";
    }
}

myMark($math, $english, $bangla, $arabic,$history , $science);

?>
