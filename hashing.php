<?php

    // Hashing is the process of converting sensitive data (like a password)
    // into a fixed-length string of letters, numbers, and/or symbols using
    // a one-way mathematical algorithm. It helps protect the original data.

    
    $password = "burger123"; // Original plain-text password


    // Hash the password using PHP's built-in password_hash() function.
    // PASSWORD_DEFAULT uses the current strongest algorithm (e.g., bcrypt).
    $hash = password_hash($password, PASSWORD_DEFAULT);


    // The password_verify() function checks if the entered password ("burger12") matches the hashed password.
    if(password_verify("burger12", $hash)) {
        echo "You are logged in!!"; // Password is correct
    } else {
        echo "Incorrect password!"; // Password is incorrect
    }

?>
