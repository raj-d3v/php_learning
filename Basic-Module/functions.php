<?php

    // function = write some code once, reuse when you need it
    //            type '()' after function name to invoke
    //            eg: add(), subtract(), multiply(), divide() 



    
    // // example 1: simple function
    
    // function brithday_song(){
    //     echo "Happy birthday dear you <br>";
    //     echo "Happy birthday to you <br>";
    //     echo "Happy birthday dear you <br>";
    //     echo "You are x years old! <br><br>";
    // }

    // brithday_song();
    // brithday_song();
    // brithday_song();



    // // example 2: functions with argument
    
                        //  temp varibale scope only inside the function
                        //    ↓ 
    // function brithday_song($name, $age){
    //     echo "Happy birthday dear {$name} <br>";
    //     echo "Happy birthday to {$name} <br>";
    //     echo "Happy birthday dear {$name} <br>";
    //     echo "You are {$age} years old! <br><br>";
    // }

    // brithday_song("zac", 25);  // inside ("zac", 25) is the argument passed
    // brithday_song("justin", 27);  
    // brithday_song("zayn", 32);  



    // // example 3: functions with return statement

    // function even_odd($number){

    //     return $number % 2;

    // }

    // $result = even_odd(3);
    // echo $result;



    // strict data types in functions 

    function hypotenuse(int $a, int $b){
        
        return sqrt($a ** 2 + $b ** 2);
        
    }

    $c =  hypotenuse(3, 4);
    echo $c;

?>