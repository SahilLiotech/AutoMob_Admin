<?php
include('db.php');

session_start();

$fullname = $_POST['fullname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$data = array();

$check = "SELECT * FROM admin_data WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (!$result) {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  if ($row) {
    $data['success'] = false;
    $data['message'] = "Email Already Exists. Please Try With Another Email";
  } else {
    $sql = "INSERT INTO admin_data (fullname, uname, email, password) VALUES ('$fullname', '$uname', '$email', '$password')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
      $data['success'] = false;
      $data['message'] = mysqli_error($conn);
    } else {
      $data['success'] = true;
      $data['message'] = 'Your Admin Account is created..';
    }
  }
}

echo json_encode($data);
