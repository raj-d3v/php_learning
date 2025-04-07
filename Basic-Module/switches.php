<?php

    //switch = replacement to using many elseif statements
    //               more efficient, less code to write


    $day= date("l");  // date() function and 'l' gives us the day of the week

    switch($day){
        case "Monday":
            echo"I hate Mondays";
            break;
        
        case "Tuesday":
            echo"It is TacoTuesday";
            break;
        
        case "Wednesday":
            echo"The work week is half-over";
            break;
        
        case "Thursday":
            echo"Its almost the weekend";
            break;
        
        case "Friday":
            echo"Its finally the weekend";
            break;
        
        case "Saturday":
            echo"Time to party";
            break;
        
        case "Sunday":
            echo"Time to Relax";
            break;
        
        default:
            echo"{$day} is not a day";
            break;

    }
     

?>