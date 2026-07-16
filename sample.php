<?php
    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;


    $add = $a + $b; 
    $sub = $c - $b; 
    $mul = $a * $d; 
    $div = $d / $b;

    $total = $add + $sub + $mul + $div;

    $average = $total /4;

    echo "The sum of $a and $b is $add </Style><br>";
    echo "The difference between $c and $b is $sub <br>";
    echo "The product of $a and $d is $mul <br>";
    echo "The division of $d by $b is $div <br>";
    echo "The total of all result is $total <br>"; 
    echo "The average of all results is $average";
    
// ?>