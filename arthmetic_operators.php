<?php
// ------------------------- Arithmetic Operators: + - * / ** %  ------------------------- 

    // Operator Precedence 
        // 1. ()
        // 2. **
        // 3. * / %
        // 4. + -

    
    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x - $y; 
    // $z = $x / $y; 
    // $z = $x * $y; 
    // $z = $x ** $y; 
    $z = $x + $y; 
    // $z = $x % $y;   // returns reminder
    echo "{$z}<br>";


    // Increment '++' & Decrement '--' Operators 
    $counter = 2;
    // $counter++;
    // $counter--;
    // $counter += 2;   // double increment
    // $counter -= 2;   // double decrement

    echo $counter;

    // ---------------------------- END -----------------------------

?>