<?php
include('db.php');
$bikeId = htmlspecialchars($_POST['ebikeId']);
$bikeName = htmlspecialchars($_POST["ebikeName"]);
$bikePrice = htmlspecialchars($_POST["ebikePrice"]);
$fuelType = htmlspecialchars($_POST["efuelType"]);
$mileage = htmlspecialchars($_POST["emileage"]);
$bikeEngine = htmlspecialchars($_POST["ebikeEngine"]);
$kerbWeight = htmlspecialchars($_POST["ekerbWeight"]);
$pros = htmlspecialchars($_POST["epros"]);
$cons = htmlspecialchars($_POST["econs"]);
$description = htmlspecialchars($_POST["edescription"]);
$data = array();

$sql = "UPDATE bike SET bike_name='$bikeName',bike_price='$bikePrice', fuel_type='$fuelType', mileage='$mileage', kerb_type='$kerbWeight', pros='$pros', cons='$cons', description='$description' WHERE bike_id='$bikeId'";

$result = mysqli_query($conn, $sql);

if ($result) {
  $data['message'] = 'Updated successfully.';
} else {
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
