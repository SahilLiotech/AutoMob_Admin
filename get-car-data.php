<?php
include('db.php');
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM car WHERE car_id=" . $_GET['car_id']));

echo json_encode($result);
