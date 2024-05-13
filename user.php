<?php
include('db.php');

$sql = "SELECT * FROM userdata";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">

      <div class="table-responsive table-container">
        <table class="table table-bordered my-table">
          <thead>
            <tr class="bg-dark text-bg-dark">
              <th>UID</th>
              <th>FName</th>
              <th>LName</th>
              <th>Email</th>
              <th>Password</th>
              <th>Address</th>
              <th>City</th>
              <th>Zip Code</th>
              <th>State</th>
              <th>Created At</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["uid"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["zip"] . "</td>";
                echo "<td>" . $row["state"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td data-record-id='" . $row['uid'] . "'><button class='btn delete-btn btn-lg btn-danger'>Delete</button></td>";
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
  <script>
    $('.delete-btn').click(function(e) {
      e.preventDefault();
      var recordId = e.target.closest('td').getAttribute("data-record-id");
      var recordType = 'user';
      $.ajax({
        method: 'POST',
        url: 'delete.php',
        data: {
          id: recordId,
          record_type: recordType
        },
        dataType: "JSON",
        success: function(response) {
          alert(response['message']);
          location.reload()
        }
      });
    });
  </script>
</body>

</html>