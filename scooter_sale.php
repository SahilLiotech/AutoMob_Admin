<?php
include('db.php');

$sql = "SELECT * FROM scooter_sales";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scooter_Sales || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <h1 class="text-center">Records of Scooter Sales</h1>

      <div class="table-responsive table-container">
        <table class="table table-bordered my-table">
          <thead>
            <tr class="bg-dark text-bg-dark">
              <th>Id</th>
              <th>User ID</th>
              <th>Scooter ID</th>
              <th>Buy At</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["uid"] . "</td>";
                echo "<td>" . $row["scooterid"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='15'>No records found</td></tr>";
            }
            ?>
          </tbody>

        </table>
      </div>
    </section>
  </div>
  <a href="#" class="scroll-to-top">
    <img src="imgs/uparrow.png" alt="" srcset="" class="scroll-to-top">
  </a>

  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>