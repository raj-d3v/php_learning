<!--                    We are using TWO method 

> First is using same keys i.e name attribute is the key : 

  Better because:

    - Less code – No need to check each item separately in the php code.

    - Easy to handle – We just loop through the selected values.

    - More scalable – If you add more checkboxes, you don’t have to modify the PHP code.



> second is using unique keys i.e name attribute is the key :

 Works fine, but:

   - You must check each checkbox individually in the php code.

   - More repetitive code.



WHY IS VALUE IMPORTANT BUT NOT NECCESSARY 

    - value makes it clear – Each checkbox now sends its actual name    instead of "on".

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>

    <!-- METHOD 1:  -->

    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
        <input type="checkbox" name="foods[]" value="Taco"> Taco<br>
        <input type="checkbox" name="foods[]" value="Hotdog"> Hotdog<br>
        <input type="checkbox" name="foods[]" value="Burger"> Burger<br>
        <input type="submit" name="submit" value="Submit">
    </form>


    <!-- METHOD 2:  -->

<!-- 
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="burger" value="Burger">
        Burger<br>
        <input type="submit" name="submit" value="Submit">

    </form> -->


   


</body>
</html>

<?php


    //  METHOD 1
     if(isset($_POST["submit"])){

        if(isset($_POST["foods"])){
            foreach($_POST["foods"] as $food){
                echo "You like $food <br>";
            }
        } 
        
        else {
            echo "You don't like any of the options. <br>";
        }
    }


    // //  METHOD 2

    // if(isset($_POST["submit"])){
        
    //     if(isset($_POST["pizza"])){
    //         echo"You Like Pizza <br>";
    //     }
    //     if(isset($_POST["taco"])){
    //         echo"You Like taco <br>";
    //     }
    //     if(isset($_POST["hotdog"])){
    //         echo"You Like Hotdog <br>";
    //     }
    //     if(isset($_POST["burger"])){
    //         echo"You Like Burger <br>";
    //     }
        
    //     if(empty($_POST["pizza"])){
    //         echo"You don't Like Pizza <br>";
    //     }
    //     if(empty($_POST["taco"])){
    //         echo"You don't Like taco <br>";
    //     }
    //     if(empty($_POST["hotdog"])){
    //         echo"You don't Like Hotdog <br>";
    //     }
    //     if(empty($_POST["burger"])){
    //         echo"You don't Like Burger <br>";
    //     }

    // }

?>
