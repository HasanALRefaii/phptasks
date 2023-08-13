<?php
include_once 'data.php';

// update.php

// Check if an ID is provided in the query parameter
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];

    // Connect to the database (replace with your DB configuration)
    $conn = mysqli_connect($servername, $username, $password , "$dbname" );

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch the record from the database based on the ID
    $query = "SELECT * FROM employee WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Record not found.";
        exit();
    }

    $row = mysqli_fetch_assoc($result);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve updated data
        $updatedName = $_POST["updated_name"];
        $updatedEmail = $_POST["updated_email"];
        $updatedAge = $_POST["updated_age"];
        $updatedCity = $_POST["updated_city"];
    
        // Prepare the UPDATE query with placeholders
        $updateQuery = "UPDATE employee SET name=?, email=?, age=?, city=? WHERE id=?";
        
        $stmt = mysqli_prepare($conn, $updateQuery);
        
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssisi", $updatedName, $updatedEmail, $updatedAge, $updatedCity, $id);
    
        if (mysqli_stmt_execute($stmt)) {
            // Record updated successfully
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: crud.php"); // Redirect to crud.php
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">
    <title>Update Record</title>
</head>
<body>
    <h2>Update Employee Record</h2>
    <form method="post">
        <label>Name: <input type="text" name="updated_name" value="<?php echo $row["name"]; ?>"></label><br>
        <label>Email: <input type="email" name="updated_email" value="<?php echo $row["email"]; ?>"></label><br>
        <label>Age: <input type="number" name="updated_age" value="<?php echo $row["age"]; ?>"></label><br>
        <label>City: <input type="text" name="updated_city" value="<?php echo $row["city"]; ?>"></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
