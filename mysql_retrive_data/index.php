<?php

    // Include the database connection file
    include("database.php");

    // SQL query to select all records from the 'users' table
    $sql = "SELECT * FROM users";

    // Execute the query and store the result in the $result variable
    // mysqli_query() returns a result set object if successful or FALSE on failure
    $result = mysqli_query($conn, $sql); 

    // Check if the query returned any rows
    if(mysqli_num_rows($result)){

        // Loop through each row in the result set and fetch data as an associative array
        while($row = mysqli_fetch_assoc($result)){
            /*
                mysqli_fetch_assoc() fetches a row as an associative array.
                - The column names become keys in the array.
                - The corresponding values are fetched from the database.

                Example Output for a "users" table:
                | id | user  |
                |----|-------|
                | 1  | Alice |
                | 2  | Bob   |

                When fetched:
                $row = ["id" => 1, "user" => "Alice"];
                $row = ["id" => 2, "user" => "Bob"];

                This allows accessing values using $row["id"] and $row["user"].
            */

            // Print the user ID from the row
            echo $row["id"] . "<br>";

            // Print the username from the row
            echo $row["user"] . "<br>";
        };
    }
    else{
        // If no records are found, display a message
        echo "No user found";
    }

    // Close the database connection
    mysqli_close($conn);

?>
