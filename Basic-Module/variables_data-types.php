<?php 

    // ------------------------- Print in PHP ------------------------- 

    echo "Hello world <br>";
    echo "Its really good <br><br>";

    // ---------------------------- END ----------------------------


    // -------------------------  Variables and Data-types in PHP ------------------------- 
        
        // variables are container which stores data and data-types are what kind of data it is integer, string, etc


    //string
    $name = "Raj <br>";
    echo $name; 

    //integer 
    $age = 24;
    echo "Age: {$age}<br>";

    //float
    $gpa = 2.5; 
    $price = 4.99;
    echo "GPA: {$gpa}<br>";
    echo "Price of Pizza: \${$price}<br>"; // float example with escape sequnce because we are using dollar.
    

    //boolean
    $employeed = true; // 1 is displayed for true
    $online = false; // nothing is displayed for false
    echo "Employeed:{$employeed}<br>";
    echo "Online status:{$online}<br>";

    

    // Directly writing echo "xyz" means a string literal
    echo "Hello {$name}"; 


    // Example of combining two variables 
    $food = "Pizza";
    $price = 7.8;
    $quantity = 3;
    $total = null;

    echo"You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total} <br><br>";

    // ---------------------------- END -----------------------------

?>

  


