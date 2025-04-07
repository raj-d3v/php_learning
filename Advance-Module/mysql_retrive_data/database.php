<?php
$servername = "localhost";
$username = "root";
$password = "";  // Keep this empty if you're using XAMPP
$dbname = "business";  // Change this to your actual database name


// conn - connection , we can choose any name we want
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed: ");
}
?>
