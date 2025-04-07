<?php

    // array = "variable" which can hold more than one value at a time    

    $foods = array("apple", "orange", "banana", "coconut");
   
    // echo $foods[0]; //we cannot directly print the whole array we need to access the particular element we want to print i.e index of the word


    //$foods[0] = "pineapple";          // replcae exisiting element 
    //array_push($foods, "pineapple");  // adds new element at the end 
    //array_pop($foods);                // removes last element 
    //array_shift($foods);              // removes first element  
    // $foods = array_reverse($foods);
    //echo count($foods);
    
    foreach ($foods as $food) {
        echo $food . "<br>";
    }
?>