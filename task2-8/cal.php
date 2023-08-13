<?php
session_start();

$valid_username = 'hasan';
$valid_email = 'hasan@gmail.com';
$valid_password = '123';




if (isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email'])) {
    $submitted_username = $_GET['username'];
    $submitted_email = $_GET['email'];
    $submitted_password = $_GET['password'];


    if ($submitted_username === $valid_username && $submitted_password === $valid_password && $submitted_email === $valid_email) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $submitted_username;

        header('Location: welcome.php');
    
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password. <a href='http://localhost/phptasks/task2-8/task1.php'>Please try again.</a>";
    }
}
?>
