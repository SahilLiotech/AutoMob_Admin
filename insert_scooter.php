<?php
include('db.php');
$scooterName = $_POST["scooterName"];
$scooterPrice = $_POST["scooterPrice"];
$fuelType = $_POST["fuelType"];
$mileage = $_POST["mileage"];
$scooterEngine = $_POST["scooterEngine"];
$kerbWeight = $_POST["kerbWeight"];
$pros = $_POST["pros"];
$cons = $_POST["cons"];
$description = $_POST["description"];
$data = array();

if (isset($_FILES["scooterImage"])) {
  $targetDirectory = "imgs/";
  $targetFile = $targetDirectory . basename($_FILES["scooterImage"]["name"]);

  if (move_uploaded_file($_FILES["scooterImage"]["tmp_name"], $targetFile)) {
    $scooterImage = $targetFile;

    $sql = "INSERT INTO scooter (scooter_img, scooter_name, scooter_price, fuel_type, mileage, scooter_engine, kerb_type, pros, cons, description) VALUES ('$scooterImage', '$scooterName', '$scooterPrice', '$fuelType', '$mileage', '$scooterEngine', '$kerbWeight', '$pros', '$cons', '$description')";

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
