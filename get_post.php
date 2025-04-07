<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post</title>
</head>
<body>

    <form action="get_post.php" method="post">
        
    <label>Quantity:</label> <br>
    <input type="number" name="quantity">
    <input type="submit" value="Total">

    </form>


</body>
</html>

<?php

    $food = "Pizza";
    $price = 7;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$food}/s <br>";
    echo "Your Total: \${$total}";

// -------------------------  $_GET, $_POST ------------------------- 

    /*
        Special variables used to collect data from an HTML form data is sent to the file in the aciton attribute of <form>
        <form action = "some_file.php" method="get">
    */

    /*$_GET = Data is appended to the url
              NOT SECURE
              char limit
              Bookmark is possible with values
              GET requests can be cached
              Better for a search page        
    */

    
        
          
    /*$_POST = Data is packaged inside the body of the HTTP request
               MORE SECURE
               No data limit
               Cannot bookmark
               GET requests are not cached
               Better for submitting credentials

    */


    // ---------------------------- END -----------------------------
?>