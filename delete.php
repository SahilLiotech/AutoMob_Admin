<?php
$data = array();

include('db.php');

$recordType = $_POST['record_type'];
$id = $_POST['id'];

$tableName = '';

switch ($recordType) {
  case 'bike':
    $tableName = 'bike';
    $primaryKey = 'bike_id';
    break;
  case 'car':
    $tableName = 'car';
    $primaryKey = 'car_id';
    break;
  case 'ev':
    $tableName = 'ev';
    $primaryKey = 'ev_id';
    break;
  case 'scooter':
    $tableName = 'scooter';
    $primaryKey = 'scooter_id';
    break;
  case 'user':
    $tableName = 'userdata';
    $primaryKey = 'uid';
    break;
  case 'feedback':
    $tableName = 'contactus';
    $primaryKey = 'fid';
    break;
  default:
    $data['message'] = 'Invalid record type';
}


$sql = "DELETE FROM $tableName WHERE  $primaryKey = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  $data['message'] = 'Record Deleted Successfully';
} else {
  $data['message'] = mysqli_error($conn);
}

echo json_encode($data);
