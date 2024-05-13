<?php
include('db.php');

$sql = "SELECT * FROM scooter";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scooter || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <button type="button" class="btn btn-lg my-btn" data-bs-toggle="modal" data-bs-target="#addscooter">Add Scooter</button>

      <!---------------- Add Car Modal ------------------>
      <div class="modal fade" id="addscooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Scooter</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form" id="scooterForm">
                <div class="mb-3">
                  <label for="scooterImage" class="form-label">Scooter Image</label>
                  <input type="file" class="form-control" id="scooterImage" name="scooterImage">
                </div>
                <div class="mb-3">
                  <label for="scooterName" class="form-label">Scooter Name</label>
                  <input type="text" class="form-control" id="scooterName" name="scooterName">
                </div>
                <div class="mb-3">
                  <label for="scooterPrice" class="form-label">Scooter Price</label>
                  <input type="text" class="form-control" id="scooterPrice" name="scooterPrice">
                </div>
                <div class="mb-3">
                  <label for="fuelType" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="fuelType" name="fuelType">
                </div>
                <div class="mb-3">
                  <label for="mileage" class="form-label">Mileage</label>
                  <input type="text" class="form-control" id="mileage" name="mileage">
                </div>
                <div class="mb-3">
                  <label for="scooterEngine" class="form-label">Scooter Engine</label>
                  <input type="text" class="form-control" id="scooterEngine" name="scooterEngine">
                </div>
                <div class="mb-3">
                  <label for="kerbWeight" class="form-label">Kerb Weight</label>
                  <input type="text" class="form-control" id="kerbWeight" name="kerbWeight">
                </div>
                <div class="mb-3">
                  <label for="pros" class="form-label">Pros</label>
                  <textarea class="form-control" id="pros" name="pros" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="cons" class="form-label">Cons</label>
                  <textarea class="form-control" id="cons" name="cons" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Add Scooter</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!------------------------------- Edit Modal  ------------------------------>
      <div class="modal fade" id="escooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Scooter</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form update-form" id="scooterForm">
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="escooterid" name="escooterid">
                </div>
                <div class="mb-3">
                  <label for="escootername" class="form-label">Scooter Name</label>
                  <input type="text" class="form-control" id="escootername" name="escootername">
                </div>
                <div class="mb-3">
                  <label for="escooterprice" class="form-label">Scooter Price</label>
                  <input type="text" class="form-control" id="escooterprice" name="escooterprice">
                </div>
                <div class="mb-3">
                  <label for="efueltype" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="efueltype" name="efueltype">
                </div>
                <div class="mb-3">
                  <label for="emileage" class="form-label">Mileage</label>
                  <input type="text" class="form-control" id="emileage" name="emileage">
                </div>
                <div class="mb-3">
                  <label for="escooterengine" class="form-label">Scooter Engine</label>
                  <input type="text" class="form-control" id="escooterengine" name="escooterengine">
                </div>
                <div class="mb-3">
                  <label for="ekerbweight" class="form-label">Kerb Weight</label>
                  <input type="text" class="form-control" id="ekerbweight" name="ekerbweight">
                </div>
                <div class="mb-3">
                  <label for="epros" class="form-label">Pros</label>
                  <textarea class="form-control" id="epros" name="epros" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="econs" class="form-label">Cons</label>
                  <textarea class="form-control" id="econs" name="econs" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="edescription" class="form-label">Description</label>
                  <textarea class="form-control" id="edescription" name="edescription" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Save Changes</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive table-container">
        <table class="table table-bordered my-table">
          <thead>
            <tr class="bg-dark text-bg-dark">
              <th>Scooter Id</th>
              <th>Scooter Image</th>
              <th>Scooter Name</th>
              <th>Scooter Price</th>
              <th>Fuel Type</th>
              <th>Mileage</th>
              <th>Engine</th>
              <th>Kerb Weight</th>
              <th>Pros</th>
              <th>Cons</th>
              <th>Description</th>
              <th>Created At</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["scooter_id"] . "</td>";
                echo "<td>" . $row["scooter_img"] . "</td>";
                echo "<td>" . $row["scooter_name"] . "</td>";
                echo "<td>" . $row["scooter_price"] . "</td>";
                echo "<td>" . $row["fuel_type"] . "</td>";
                echo "<td>" . $row["mileage"] . "</td>";
                echo "<td>" . $row["scooter_engine"] . "</td>";
                echo "<td>" . $row["kerb_type"] . "</td>";
                echo "<td class='text-truncate'>" . $row['pros'] . "</td>";
                echo "<td class='text-truncate'>" . $row['cons'] . "</td>";
                echo "<td class='text-truncate'>" . $row['description'] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td data-record-id='" . $row['scooter_id'] . "'><button class='btn edit-btn btn-lg btn-warning'>Edit</button></td>";
                echo "<td data-record-id='" . $row['scooter_id'] . "'><button class='btn delete-btn btn-lg btn-danger'>Delete</button></td>";
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
    $('#scooterForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append('scooterImage', $('#scooterImage')[0].files)
      $.ajax({
        type: "POST",
        url: "./insert_scooter.php",
        processData: false,
        contentType: false,
        data: formData,
        dataType: "JSON",
        success: function(response) {
          alert(response['message'])
          location.reload()
        }
      });
    });
    $('.edit-btn').click(function(e) {
      e.preventDefault();
      var id = e.target.closest('td').getAttribute('data-record-id');
      $.ajax({
        type: "GET",
        url: "get-scooter-data.php",
        data: {
          scooter_id: id
        },
        dataType: "JSON",
        success: function(response) {
          $('#escooterid').val(id)
          $('#escootername').val(response['scooter_name']);
          $('#escooterprice').val(response['scooter_price']);
          $('#efueltype').val(response['fuel_type']);
          $('#emileage').val(response['mileage']);
          $('#escooterengine').val(response['scooter_engine']);
          $('#ekerbweight').val(response['kerb_type']);
          $('#epros').val(response['pros']);
          $('#econs').val(response['cons']);
          $('#edescription').val(response['description']);
          $('#escooter').modal('show');
        }
      });
    });

    $('.update-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "update-scooter-detail.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function(response) {
          alert(response['message']);
          location.reload()
        }
      });
    });

    $('.delete-btn').click(function(e) {
      e.preventDefault();
      var recordId = e.target.closest('td').getAttribute("data-record-id");
      var recordType = 'scooter';
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