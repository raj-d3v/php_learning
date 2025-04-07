<?php

    session_start(); // This is how to start a session

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    This is the Home Page <br><br>

    <form action="home.php" method="post">
    <input type="submit" name="logout" value="logout">
    </form>
     <br>

</body>
</html>

<?php

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: login.php");
    }

?>

