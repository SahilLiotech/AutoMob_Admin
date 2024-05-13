<?php
include('db.php');
$carName = $_POST["carName"];
$carType = $_POST["carType"];
$carPrice = $_POST["carPrice"];
$fuelType = $_POST["fuelType"];
$mileage = $_POST["mileage"];
$carEngine = $_POST["carEngine"];
$seatingCapacity = $_POST["seatingCapacity"];
$pros = $_POST["pros"];
$cons = $_POST["cons"];
$description = $_POST["description"];
$data = array();

if (isset($_FILES["carImage"])) {
  $targetDirectory = "imgs/";
  $targetFile = $targetDirectory . basename($_FILES["carImage"]["name"]);

  if (move_uploaded_file($_FILES["carImage"]["tmp_name"], $targetFile)) {
    $carImage = $targetFile;

    $sql = "INSERT INTO car (car_img, car_name, car_type, car_price, fuel_type, mileage, car_engine, seating_capacity, pros, cons, description) VALUES ('$carImage', '$carName', '$carType', '$carPrice', '$fuelType', '$mileage', '$carEngine', '$seatingCapacity', '$pros', '$cons', '$description')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      $data['message'] = 'Added Successfully';
    } else {
      $data['message'] = mysqli_error($conn);
    }
  } else {
    $data['message'] = 'Error Uploading file!';
  }
} else {
  $data['message'] = 'No File was selected/given.';
}
echo json_encode($data);
