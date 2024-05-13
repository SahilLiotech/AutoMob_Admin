<?php
include('db.php');

$sqlCar = "SELECT COUNT(*) AS total_records FROM car";
$resultCar = mysqli_query($conn, $sqlCar);

$sqlBike = "SELECT COUNT(*) AS total_records FROM bike";
$resultBike = mysqli_query($conn, $sqlBike);

$sqlEv = "SELECT COUNT(*) AS total_records FROM ev";
$resultEv = mysqli_query($conn, $sqlEv);

$sqlScooter = "SELECT COUNT(*) AS total_records FROM scooter";
$resultScooter = mysqli_query($conn, $sqlScooter);

$sqlUserdata = "SELECT COUNT(*) AS total_records FROM userdata";
$resultUserdata = mysqli_query($conn, $sqlUserdata);

$sqlContactUs = "SELECT COUNT(*) AS total_records FROM contactus";
$resultContactUs = mysqli_query($conn, $sqlContactUs);

if ($resultCar && $resultBike && $resultEv && $resultScooter && $resultUserdata && $resultContactUs) {
  $rowCar = mysqli_fetch_assoc($resultCar);
  $car_count = $rowCar['total_records'];

  $rowBike = mysqli_fetch_assoc($resultBike);
  $bike_count = $rowBike['total_records'];

  $rowEv = mysqli_fetch_assoc($resultEv);
  $ev_count = $rowEv['total_records'];

  $rowScooter = mysqli_fetch_assoc($resultScooter);
  $scooter_count = $rowScooter['total_records'];

  $rowUserdata = mysqli_fetch_assoc($resultUserdata);
  $user_count = $rowUserdata['total_records'];

  $rowContactUs = mysqli_fetch_assoc($resultContactUs);
  $contactus_count = $rowContactUs['total_records'];
} else {
  echo "Error: " . mysqli_error($conn);
}

$tables = ['car_sales', 'bike_sales', 'scooter_sales', 'ev_sales'];
$sales_count = 0;

foreach ($tables as $table) {
  $sql = "SELECT COUNT(*) AS total_records FROM $table";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $sales_count += $row['total_records'];
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <div class="row dashboard-row">
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-car.png" class="logo-img" />
              <p class="card-heading">Cars</p>
            </div>
            <p class="card-detail"><?php echo $car_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-bike.png" class="logo-img" />
              <p class="card-heading">Bikes</p>
            </div>
            <p class="card-detail"><?php echo $bike_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-scooter.png" class="logo-img" />
              <p class="card-heading">Scooter</p>
            </div>
            <p class="card-detail"><?php echo $scooter_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-ev.png" class="logo-img" />
              <p class="card-heading">Electric Vehicles</p>
            </div>
            <p class="card-detail"><?php echo $ev_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-user.png" class="logo-img" />
              <p class="card-heading">Users</p>
            </div>
            <p class="card-detail"><?php echo $user_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-feedback.png" class="logo-img" />
              <p class="card-heading">Feedbacks</p>
            </div>
            <p class="card-detail"><?php echo $contactus_count ?></p>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card d-flex align-items-center justify-content-center">
            <div class="logo-container card-logo-container d-flex align-items-center justify-content-center">
              <img src="imgs/admin-sale.png" class="logo-img" />
              <p class="card-heading">Sales</p>
            </div>
            <p class="card-detail"><?php echo $sales_count ?></p>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>