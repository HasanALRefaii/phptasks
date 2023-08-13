<?php
// Start the session (if not started)

    session_start();


// Check if the form is submitted
if(isset($_POST['submit'])){

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted car information
    $car_type = $_POST["car_type"];
    $car_brand = $_POST["car_brand"];
    $car_model = $_POST["car_model"];
    $car_color = $_POST["car_color"];
    $car_image = $_FILES["car_image"]["name"];
    $car_image_temp = $_FILES["car_image"]["tmp_name"];

    // Create an array with the car information
    $new_car = array(
        "car_type" => $car_type,
        "car_brand" => $car_brand,
        "car_model" => $car_model,
        "car_color" => $car_color,
        "car_image" => $car_image,
    );

    // Check if the session variable exists and if it contains any added cars
    if (!isset($_SESSION["added_cars"])) {
        $_SESSION["added_cars"] = array();
    }

    // Store the new car information array in the session variable
    $_SESSION["added_cars"][] = $new_car;

      // Move the uploaded car image to the "car_images" folder
      $target_directory = "car_images/"; // Change this to your desired image storage directory
      // $target_path = $target_directory . basename($car_image);
      // move_uploaded_file($car_image_temp, $target_path);
       
      if (isset($_POST["clear_table"])) {
        echo "Clearing the table...";
        var_dump($_SESSION["added_cars"]); // Print the session data before clearing
        session_unset();
        echo "Table cleared!";
        var_dump($_SESSION["added_cars"]); // Print the session data after clearing
        header("Location: home.php");
        exit;
    }
  

    // Redirect back to the main page after adding the car
    header("Location: home.php");
    exit();
} 
?>
