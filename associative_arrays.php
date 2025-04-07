<!-- -------------------- Example HTML for use case -------------------- --!>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html> -->



<?php
    // associative array = An array made of key=>value pairs


    $capitals = array(  "USA"=>"Washington D.C.",
                        "Japan"=>"Kyoto",
                        "Australia"=>"Canberra",
                        "India"=>"New Delhi" );


    // FUNCTIONS IN ARRAY

    // $capitals["USA"] = "LA";  // To change the value

    // $capitals["China"] = "Bejing"; // Add a new key => value pair

    // array_pop($capitals);  // removes the last key => value pair

    // array_shift($capitals);  // removes the firs key => value pair


    // // returns only keys *in a new array
    // $keys = array_keys($capitals); 
    // foreach($keys as $key){
    //     echo"{$key}<br>";
    // } 
    
    // // returns only values  *in a new array
    // $values = array_values($capitals); 
    // foreach($values as $value){
    //     echo"{$value}<br>";
    // } 

     
    // $capitals = array_flip($capitals); // flips the whole array i.e keys to values and values to keys and store in a *new array

   
    // $capitals = array_reverse($capitals); // reverses the array and stores in a new array

    // echo count($capitals); // counts the number of  pair
    

    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }   


//  -------------------- Example PHP for use case --------------------

    // $capital = $capitals[$_POST["country"]];    
    // echo"The capital is {$capital}";
?>