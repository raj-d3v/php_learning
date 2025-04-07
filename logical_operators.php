<?php

    // Logical operators = combine conditional statements
    // if(condition1 && condition2)

    // && AND  = True if both conditions are true
    // || OR   = True if at least one conditin is true
    //  ! NOT  = True if false. False if true.


    $temp = 25;


    // ------------------ AND EXAMPLE ----------------------

    // if($temp >= 0 && $temp <=30){
    //     echo"The weather is good";
    // }

    // else{
    //     echo"The weather is bad";
    // }
   

    // ------------------ OR EXAMPLE ----------------------
    
    // if($temp < 0 || $temp > 30){
    //     echo"The weather is bad";
    // }
    
    // else{
    //     echo"The weather is good";
    // }
    
    
    // ------------------ NOT EXAMPLE ----------------------
    

    $cloudy = true;

    if(!$cloudy){
        echo"Its sunny";
    }
    else{
        echo"Its cloudy";  
    }


?>