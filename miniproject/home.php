<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <style>
    .navbar-brand {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 24px;
  color: #0048A5;
  text-decoration: none;
  display: flex;
  align-items: center;
}

.car-icon {
  margin-left: 5px;
}
     .welcome-box {
     
    background-image: url('img/11.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 4px 2px 4px rgba(0, 0, 0, 0.8);
      color: #ffffff;
      
    }

    .welcome-title {
      font-size: 40px;
      font-weight: bold;
      margin-top: 20px;
      text-align :center;
    }

    .welcome-paragraph {
      margin-top :40px;
      font-size: 20px;
    }
    @media (max-width: 481px) {
      .welcome-box {
     
     background-image: none;
    color : black;
  }
    table {
      font-size: 12px;
    }

    img {
      max-height: 60px;
      max-width: 80px;
    }
  }
  </style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
      Car Store
      <span class="car-icon">&#128663;</span>
    </a>      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/phptasks/miniproject/view_car.php?id=1">View Cars</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mt-4">
    <div class="welcome-box">
      <h2 class="welcome-title">Welcome to My Car Store</h2>
      <p class="welcome-paragraph">Welcome to our website, the ultimate destination for car enthusiasts and buyers alike! We take immense 
          pride in presenting a diverse and exquisite collection of cars that cater to every taste and budget.
           Whether you're in search of a sleek sedan, a powerful SUV, or a classic vintage model, we have something 
           special just for you. Our user-friendly interface ensures a seamless browsing experience, enabling you to 
           explore our extensive inventory with ease. As a trusted platform, we prioritize transparency and provide detailed 
           information about each vehicle, including specifications, history, and price. Our team of experts is always at your
            service, ready to assist you in making an informed decision. With secure payment options and efficient delivery 
            services, purchasing your dream car has never been more convenient. Rev up your passion for driving and begin your
             journey with us today! <br><br><br><br><br><br><br><br><br><br>
  </div>         




</p>
      </div>
    </div>
  </div>

       <!-- Add Car Form -->
       <div class="container mt-4">
    <h2>Add a New Car</h2>
    <form action="add_car.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="car_type">Car Type</label>
            <input type="text" class="form-control" id="car_type" name="car_type" required>
          </div>
          <div class="form-group">
            <label for="car_brand">Car brand</label>
            <input type="text" class="form-control" id="car_brand" name="car_brand" required>
          </div>
          <div class="form-group">
            <label for="car_model">Car Model</label>
            <input type="text" class="form-control" id="car_model" name="car_model" required>
          </div>
          <div class="form-group">
            <label for="car_color">Car Color</label>
            <input type="text" class="form-control" id="car_color" name="car_color" required>
          </div>
          <div class="form-group">
            <label for="car_image">Car Image</label>
            <input type="file" class="form-control-file" id="car_image" name="car_image" accept="image/*" required>
          </div>
          <button type="submit" name="submit" value="Submit" class="btn btn-primary">Add Car</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <?php
  // Check if the session variable exists and if it contains any added cars
  if (isset($_SESSION["added_cars"]) && count($_SESSION["added_cars"]) > 0) {
    echo '<div class="container mt-4">';
    echo '<h2>Added Cars</h2>';
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-sm">';
    echo '<thead><tr><th>Car Type</th><th>Car Brand</th><th>Car Model</th><th>Car Color</th><th>Car Image</th></tr></thead>';
    echo '<tbody>';

    foreach ($_SESSION["added_cars"] as $carIndex => $car) {
      echo '<tr>';
      echo '<td>' . $car["car_type"] . '</td>';
      echo '<td>' . $car["car_brand"] . '</td>';
      echo '<td>' . $car["car_model"] . '</td>';
      echo '<td>' . $car["car_color"] . '</td>';
      echo '<td><img src="img/' . $car["car_image"] . '" alt="Car Image" style="max-height: 100px; max-width: 100px;"></td>';
      echo '</tr>';
    }

    echo '</tbody></table>';
    echo '</div>'; // End of table-responsive
    echo '</div>'; // End of container
  } else {
    echo '<p>No cars added yet.</p>';
  }
  ?>
</div>



<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <form action="view_car.php" method="POST">
        <input type="hidden" name="view car" value="2">
        <button type="submit" class="btn btn-primary">View Cars</button>
      </form>
    <!-- </div>
    <div class="col-md-6">
    <form action="add_car.php" method="POST">
    <input type="hidden" name="clear_table" value="clear_table">
    <button type="submit" class="btn btn-danger">Clear Table</button>
</form >
    </div> -->
  </div>
</div>

</div>


  <!-- Footer -->
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
