<?php
include('db.php');
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM scooter WHERE scooter_id=" . $_GET['scooter_id']));

echo json_encode($result);
