<?php
include('db.php');
$bikeName = $_POST["bikeName"];
$bikePrice = $_POST["bikePrice"];
$fuelType = $_POST["fuelType"];
$mileage = $_POST["mileage"];
$bikeEngine = $_POST["bikeEngine"];
$kerbWeight = $_POST["kerbWeight"];
$pros = $_POST["pros"];
$cons = $_POST["cons"];
$description = $_POST["description"];
$data = array();

if (isset($_FILES["bikeImage"])) {
  $targetDirectory = "imgs/";
  $targetFile = $targetDirectory . basename($_FILES["bikeImage"]["name"]);

  if (move_uploaded_file($_FILES["bikeImage"]["tmp_name"], $targetFile)) {
    $bikeImage = $targetFile;

    $sql = "INSERT INTO bike (bike_img, bike_name, bike_price, fuel_type, mileage, bike_engine, kerb_type, pros, cons, description) VALUES ('$bikeImage', '$bikeName', '$bikePrice', '$fuelType', '$mileage', '$bikeEngine', '$kerbWeight', '$pros', '$cons', '$description')";

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
