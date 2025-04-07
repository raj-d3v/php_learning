<?php

    // SESSION
    // A superglobal variable used to store information about a user across multiple pages.
    // A user is assigned a session ID, e.g., login credentials.
    
    session_start(); // This is how to start a session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

       <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <button type="submit" name="login" value="login">Login</button>
        </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");

        }

        else{
            echo"Missing username/password <br>";
        }

    }

?>