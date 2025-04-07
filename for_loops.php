<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<body>

    <form method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" name="Start">
    </form>


</body>
</html>

<?php

    // for loop = repeat some code a certain number of times

    $counter = $_POST["counter"];


     //(start; stop; increment/ decrement)
    for($i = $counter; $i > 0; $i--){
        echo $i . "<br>";
    }

    
?>