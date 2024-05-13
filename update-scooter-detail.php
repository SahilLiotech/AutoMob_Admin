<?php
include('db.php');
$scooterId = htmlspecialchars($_POST['escooterid']);
$scooterName = htmlspecialchars($_POST["escootername"]);
$scooterPrice = htmlspecialchars($_POST["escooterprice"]);
$fuelType = htmlspecialchars($_POST["efueltype"]);
$mileage = htmlspecialchars($_POST["emileage"]);
$scooterEngine = htmlspecialchars($_POST["escooterengine"]);
$kerbWeight = htmlspecialchars($_POST["ekerbweight"]);
$pros = htmlspecialchars($_POST["epros"]);
$cons = htmlspecialchars($_POST["econs"]);
$description = htmlspecialchars($_POST["edescription"]);
$data = array();

$sql = "UPDATE scooter SET scooter_name='$scooterName',scooter_price='$scooterPrice', fuel_type='$fuelType', mileage='$mileage', kerb_type='$kerbWeight', pros='$pros', cons='$cons', description='$description' WHERE scooter_id='$scooterId'";

$result = mysqli_query($conn, $sql);

if ($result) {
  $data['message'] = 'Updated successfully.';
} else {
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
