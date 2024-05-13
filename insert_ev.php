<?php
include('db.php');
$evName = $_POST["evName"];
$evPrice = $_POST["evPrice"];
$fuelType = $_POST["evFuelType"];
$range = $_POST["evRange"];
$evMaxSpeed = $_POST["evMaxSpeed"];
$chargingTime = $_POST["evChargingTime"];
$kerbWeight = $_POST["evKerbWeight"];
$pros = $_POST["evPros"];
$cons = $_POST["evCons"];
$description = $_POST["evD  escription"];
$data = array();

if (isset($_FILES["evImage"])) {
  $targetDirectory = "imgs/";
  $targetFile = $targetDirectory . basename($_FILES["evImage"]["name"]);

  if (move_uploaded_file($_FILES["evImage"]["tmp_name"], $targetFile)) {
    $evImage = $targetFile;

    $sql = "INSERT INTO ev (ev_img, ev_name, ev_price, fuel_type, ev_range, max_speed, charging_time, kerb_type, pros, cons, description) VALUES ('$evImage', '$evName', '$evPrice', '$fuelType', '$range', '$evMaxSpeed', '$chargingTime', '$kerbWeight', '$pros', '$cons', '$description')";

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
