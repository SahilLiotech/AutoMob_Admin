<?php
include('db.php');

$sql = "SELECT * FROM bike";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bikes || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <button type="button" class="btn btn-lg my-btn" data-bs-toggle="modal" data-bs-target="#addbike">Add Bike</button>

      <!---------------- Add bike Modal ------------------>
      <div class="modal fade" id="addbike" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Bike</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form" id="bikeForm">
                <div class="mb-3">
                  <label for="bikeImage" class="form-label">Bike Image</label>
                  <input type="file" class="form-control" id="bikeImage" name="bikeImage">
                </div>
                <div class="mb-3">
                  <label for="bikeName" class="form-label">Bike Name</label>
                  <input type="text" class="form-control" id="bikeName" name="bikeName">
                </div>
                <div class="mb-3">
                  <label for="bikePrice" class="form-label">Bike Price</label>
                  <input type="text" class="form-control" id="bikePrice" name="bikePrice">
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
                  <label for="bikeEngine" class="form-label">Bike Engine</label>
                  <input type="text" class="form-control" id="bikeEngine" name="bikeEngine">
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
                <button type="submit" class="btn btn-lg btn-primary">Add Bike</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <!---------------- Edit Modal  ------------------->
      <div class="modal fade" id="editbike" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Bike</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form update-form">
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="ebikeId" name="ebikeId">
                </div>
                <div class="mb-3">
                  <label for="bikeName" class="form-label">Bike Name</label>
                  <input type="text" class="form-control" id="ebikeName" name="ebikeName">
                </div>
                <div class="mb-3">
                  <label for="bikePrice" class="form-label">Bike Price</label>
                  <input type="text" class="form-control" id="ebikePrice" name="ebikePrice">
                </div>
                <div class="mb-3">
                  <label for="fuelType" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="efuelType" name="efuelType">
                </div>
                <div class="mb-3">
                  <label for="mileage" class="form-label">Mileage</label>
                  <input type="text" class="form-control" id="emileage" name="emileage">
                </div>
                <div class="mb-3">
                  <label for="bikeEngine" class="form-label">Bike Engine</label>
                  <input type="text" class="form-control" id="ebikeEngine" name="ebikeEngine">
                </div>
                <div class="mb-3">
                  <label for="kerbWeight" class="form-label">Kerb Weight</label>
                  <input type="text" class="form-control" id="ekerbWeight" name="ekerbWeight">
                </div>
                <div class="mb-3">
                  <label for="pros" class="form-label">Pros</label>
                  <textarea class="form-control" id="epros" name="epros" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="cons" class="form-label">Cons</label>
                  <textarea class="form-control" id="econs" name="econs" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="edescription" name="description" rows="5"></textarea>
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
              <th>Bike Id</th>
              <th>Bike Image</th>
              <th>Bike Name</th>
              <th>Bike Price</th>
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
                echo "<td>" . $row["bike_id"] . "</td>";
                echo "<td>" . $row["bike_img"] . "</td>";
                echo "<td>" . $row["bike_name"] . "</td>";
                echo "<td>" . $row["bike_price"] . "</td>";
                echo "<td>" . $row["fuel_type"] . "</td>";
                echo "<td>" . $row["mileage"] . "</td>";
                echo "<td>" . $row["bike_engine"] . "</td>";
                echo "<td>" . $row["kerb_type"] . "</td>";
                echo "<td class='text-truncate'>" . $row['pros'] . "</td>";
                echo "<td class='text-truncate'>" . $row['cons'] . "</td>";
                echo "<td class='text-truncate'>" . $row['description'] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td data-record-id='" . $row['bike_id'] . "'><button class='btn edit-btn btn-lg btn-warning'>Edit</button></td>";
                echo "<td data-record-id='" . $row['bike_id'] . "'><button class='btn delete-btn btn-lg btn-danger'>Delete</button></td>";
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
    $('#bikeForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append('bikeImage', $('#bikeImage')[0].files)
      $.ajax({
        type: "POST",
        url: "./insert_bike.php",
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
        url: "get-bike-data.php",
        data: {
          bike_id: id
        },
        dataType: "JSON",
        success: function(response) {
          $('#ebikeId').val(id)
          $('#ebikeName').val(response['bike_name']);
          $('#ebikePrice').val(response['bike_price']);
          $('#efuelType').val(response['fuel_type']);
          $('#emileage').val(response['mileage']);
          $('#ebikeEngine').val(response['bike_engine']);
          $('#ekerbWeight').val(response['kerb_type']);
          $('#epros').val(response['pros']);
          $('#econs').val(response['cons']);
          $('#edescription').val(response['description']);
          $('#editbike').modal('show');
        }
      });
    });

    $('.update-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "update-bike-details.php",
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
      var recordType = 'bike';
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