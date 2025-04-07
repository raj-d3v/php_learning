<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>
<body>
    
    <form action="mathFunction.php" method="post">
            
        <label>X:</label>
        <input type="text" name="x"><br>
        <label>Y:</label>
        <input type="text" name="y"><br>

        <input type="submit" value="Total">

    </form>

</body>
</html>


<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;

    // $total = abs($x);       // returns positive value
    // $total = round($x);     // round of a number  
    // $total = round($x, 2);  // round after 2 decimal numbers i.e = 3.2123 > 2.21
    // $total = floor($x);     // always rounds down  
    // $total = ceil($x);      // always rounds up
    // $total = pow($x,$y);    // power i.e: 2^3 = 8
    // $total = sqrt($x);      // returns square root 
    // $total = max($x, $y);   // returns highest number 
    // $total = min($x, $y);   // returns lowest number 
    // $total = rand;          // reutrns random number
    // $total = rand(1,6);     // reutrns random number between given range

    echo $total;

?>