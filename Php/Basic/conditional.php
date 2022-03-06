<?php 
    $num=1;
    if ($num%2==0) {
        echo "Even";
    } else {
        echo "Odd";
    }

    echo "<br>";
    $num=1;
    if($num%3   ==0) {
        echo "remainder is 0";
    } else if($num%3==1) {
        echo "remainder is 1";
    }
    else {
        echo "remainder is 2";
    }

    echo "<br>";
    //switch case
    $num=1;
    switch ($num)
    {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        case 3:
            echo "Three";
            break;
        default:
            echo "Not a number";
            break;
    }   
?>