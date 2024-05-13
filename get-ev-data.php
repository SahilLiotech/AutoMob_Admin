<?php
include('db.php');
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ev WHERE ev_id=" . $_GET['ev_id']));

echo json_encode($result);
