<?php
include('db.php');
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM bike WHERE bike_id=" . $_GET['bike_id']));

echo json_encode($result);
