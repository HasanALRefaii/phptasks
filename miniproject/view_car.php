<?php
// Start the session (if not started)
  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Cars</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
.card {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      margin-bottom :
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s;
      align-items: center;

    }

    /* Hover effect */
    .card:hover {
      box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.8);
    }
.card-title {
  font-size: 20px;
  font-weight: bold;
}

.card-text {
  margin-bottom: 14px;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}
  </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
      Car Store
      <span class="car-icon">&#128663;</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/phptasks/miniproject/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/phptasks/miniproject/view_car.php?id=1">View Cars</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-4">
  <h2>All Added Cars</h2>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <?php
    // Check if the session variable exists and if it contains any added cars
    if (isset($_SESSION["added_cars"]) && count($_SESSION["added_cars"]) > 0) {
      foreach ($_SESSION["added_cars"] as $carIndex => $car) {
    ?>
    <div class="col mb-4">
      <div class="card">
        <img src="img/<?php echo $car["car_image"]; ?>" alt="Car Image" class="card-img-top"
          style="width: 300px; height: 220px;">
        <div class="card-body">
          <h5 class="card-title">Car Type: <?php echo $car["car_type"]; ?></h5>
          <p class="card-text">Car Brand: <?php echo $car["car_brand"]; ?></p>
          <p class="card-text">Car Model: <?php echo $car["car_model"]; ?></p>
          <p class="card-text">Car Color: <?php echo $car["car_color"]; ?></p>
        </div>
      </div>
    </div>
    <?php
      }
    } else {
      echo '<p>No cars added yet.</p>';
    }
    ?>
  </div>
</div>


  <!-- Back to Home Button -->
  <div class="container mt-4">
    <a href="home.php" class="btn btn-primary">Back to Home</a>
  </div>
  <footer class="bg-dark mt-5">
  <div class="container py-3">
    <div class="row">
      <div class="col-md-6">
        <p style="color: white; font-weight: bold; font-size: 18px;">&copy; 2023 Car Store. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-right">
        <p style="color: white; font-weight: bold; font-size: 18px;">Contact Us: hasan@gmail.com</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>