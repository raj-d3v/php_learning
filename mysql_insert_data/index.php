<?php

    // Include the database connection file
    include("database.php");


    $username = "PATRICK";
    $password = "rock3";
    // using hash so that the password stored in the backend is more secure
    $hash = password_hash($password,PASSWORD_DEFAULT); 

    // SQL query to insert a new user into the 'users' table
    $sql = "INSERT INTO users (`user`, `password`) 
            VALUES ('$username','$hash')";

    // Execute the query using mysqli_query() - This function sends the SQL query to the database and returns true if successful, false otherwise
    try{
        mysqli_query($conn, $sql);
        echo "Data inserted successfully!"; 
    } 
    catch(mysqli_sql_exception){
        echo "Could not register user ";
    }

    // Close the database connection
    mysqli_close($conn);

?>
