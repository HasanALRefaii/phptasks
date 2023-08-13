<?php
include_once 'data.php';

// insert.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $city = $_POST["city"]; 

    $conn = mysqli_connect($servername, $username, $password , "$dbname" );

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Construct and execute INSERT query
    $ins = "INSERT INTO employee (name, email, age, city) VALUES ('$name', '$email', '$age', '$city')";

    if (mysqli_query($conn, $ins)) {
        echo "Record inserted successfully";
        header("Location: crud.php");

        
    } else {
        echo "Error: " . $ins . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
