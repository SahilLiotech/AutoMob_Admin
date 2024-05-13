<?php
include('db.php');
$evId = htmlspecialchars($_POST['evid']);
$evName = htmlspecialchars($_POST["eevName"]);
$evPrice = htmlspecialchars($_POST["eevPrice"]);
$fuelType = htmlspecialchars($_POST["eevFuelType"]);
$range = htmlspecialchars($_POST["eevRange"]);
$maxSpeed = htmlspecialchars($_POST["eevMaxSpeed"]);
$chargingTime = htmlspecialchars($_POST["eevChargingTime"]);
$kerbWeight = htmlspecialchars($_POST["eevKerbWeight"]);
$pros = htmlspecialchars($_POST["eevPros"]);
$cons = htmlspecialchars($_POST["eevCons"]);
$description = htmlspecialchars($_POST["eevDescription"]);
$data = array();

$sql = "UPDATE ev SET ev_name='$evName',ev_price='$evPrice', fuel_type='$fuelType', ev_range='$range',max_speed='$maxSpeed', charging_time='$chargingTime',kerb_type='$kerbWeight', pros='$pros', cons='$cons', description='$description' WHERE ev_id='$evId'";

$result = mysqli_query($conn, $sql);

if ($result) {
  $data['message'] = 'Updated successfully.';
} else {
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
