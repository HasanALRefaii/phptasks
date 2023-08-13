<?php
include_once 'data.php';

// Check if an ID is provided in the query parameter
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];

    // Connect to the database (replace with your DB configuration)
    $conn = mysqli_connect($servername, $username, $password , "$dbname" );

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Execute the DELETE query
    $deleteQuery = "DELETE FROM employee WHERE id='$id'";

    if (mysqli_query($conn, $deleteQuery)) {
        // Record deleted successfully
        mysqli_close($conn);
        header("Location: crud.php"); // Redirect to crud.php
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
