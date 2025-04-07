<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="isset_empty.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <br><br>

        <label>Password:</label>
        <input type="password" name="password">
        <br><br>

        <input type="submit" name="login" value="Login">
    </form>


</body>
</html>

<?php

    if(isset($_POST["login"])){

        if(empty($_POST["username"] && empty($_POST["passowrd"]))){
            echo"Type username and password";
        }

        elseif(empty($_POST["username"])){
            echo"Type your username";
        }

        elseif(empty($_POST["password"])){
            echo"Type your password";
        }

        else{
        echo"Welcome to your account";
        }

    }
   





    // // isset() = Returns TRUE if a variable is declared and not null

    // $username = 0;

    // if(isset($username)){
        
    //     echo "This varaible is set";
    // }
    // else{

    //     echo "This varibale is not set";
    // }


    // // empty() = Returns TRUE if a variable is not declared, false, null, "", 0, "0"


    // $username = 0;

    // if(empty($username)){
        
    //     echo "This varaible is empty";
    // }
    // else{

    //     echo "This varibale is not empty";
    // }


?>