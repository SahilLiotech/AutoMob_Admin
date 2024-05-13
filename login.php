<?php
include('db.php');
session_start();

$uname = $_POST['uname'];
$password = $_POST['password'];
$data = array();

$check = "SELECT * FROM admin_data WHERE uname='$uname'";
$result = mysqli_query($conn, $check);

if (!$result) {
  $data['success'] = false;
  $data['message'] = mysqli_error($conn);
} else {
  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    $data['success'] = false;
    $data['message'] = 'User with this email does not exist.';
  } else {
    if (password_verify($password, $row['password'])) {
      $data['success'] = true;
      $data['message'] = 'Login successfully done';
      $_SESSION["id"] = $row['A_Id'];
      $_SESSION["fullname"] = $row['fullname'];
      $_SESSION["uname"] = $row['uname'];
      $_SESSION["email"] = $row['email'];
    } else {
      $data['success'] = false;
      $data['message'] = 'Incorrect password. Please try again.';
    }
  }
}

echo json_encode($data);
