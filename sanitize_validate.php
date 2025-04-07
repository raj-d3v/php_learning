<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>


<?php

    // SANITIZATION - if input doesn't pass the sanitization test, it modifies the input by stripping or altering certain characters to make it safe.


    // if(isset($_POST["login"])){

    //     $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);  // prevent user to execute any kind of code or script in the input box                                                                             eg: <script> alert("You have a VIRUS!") </script>

    //     $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        
    //     $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

    //     echo"Hello {$username} you are {$age} old and your email is {$email}";
    
    // }


    // VALIDATION - if input doesn't pass the validation test, it fails (returns false, null, or an empty string depending on the function).

    
    if(isset($_POST["login"])){

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        
        if(empty($age) && empty($email)){
            echo "That number & email is not valid";
        }
        else{
            echo "You are {$age} years old and your email is {$email}" ;
        }

    }


?>