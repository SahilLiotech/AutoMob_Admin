<?php
include('db.php');
$carId = htmlspecialchars($_POST['ecarId']);
$carName = htmlspecialchars($_POST["ecarName"]);
$carType = htmlspecialchars($_POST["ecarType"]);
$carPrice = htmlspecialchars($_POST["ecarPrice"]);
$fuelType = htmlspecialchars($_POST["efuelType"]);
$mileage = htmlspecialchars($_POST["emileage"]);
$carEngine = htmlspecialchars($_POST["ecarEngine"]);
$seatingCapacity = htmlspecialchars($_POST["eseatingCapacity"]);
$pros = htmlspecialchars($_POST["epros"]);
$cons = htmlspecialchars($_POST["econs"]);
$description = htmlspecialchars($_POST["edescription"]);
$data = array();

$sql = "UPDATE car SET car_name='$carName', car_type='$carType', car_price='$carPrice', fuel_type='$fuelType', mileage='$mileage', seating_capacity='$seatingCapacity', pros='$pros', cons='$cons', description='$description' WHERE car_id='$carId'";

$result = mysqli_query($conn, $sql);

if ($result) {
  $data['message'] = 'Updated successfully.';
} else {
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
