<?php
    
    $hours = 50;
    $pay = 15;
    $weekly_earnings = null;

    if ($hours < 0){
        echo "Invalid Input";
    }

    elseif ($hours <= 40){
        $weekly_earnings = $hours * $pay;
        echo "You made \${$weekly_earnings} this week";
    }

    else{
        $weekly_earnings =  ($pay * 40) + ($hours - 40) * ($pay * 1.5);
        echo "You made \${$weekly_earnings} this week with overtime pay added";
    }

?>
