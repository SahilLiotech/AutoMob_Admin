<?php
include('db.php');

$sql = "SELECT * FROM car";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cars || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <button type="button" class="btn btn-lg my-btn" data-bs-toggle="modal" data-bs-target="#addcar">Add Car</button>

      <!---------------- Add Car Modal ------------------>
      <div class="modal fade" id="addcar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Car</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form" id="carForm" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="carImage" class="form-label">Car Image</label>
                  <input type="file" class="form-control" id="carImage" name="carImage">
                </div>
                <div class="mb-3">
                  <label for="carName" class="form-label">Car Name</label>
                  <input type="text" class="form-control" id="carName" name="carName">
                </div>
                <div class="mb-3">
                  <label for="carType" class="form-label">Car Type</label>
                  <input type="text" class="form-control" id="carType" name="carType">
                </div>
                <div class="mb-3">
                  <label for="carPrice" class="form-label">Car Price</label>
                  <input type="text" class="form-control" id="carPrice" name="carPrice">
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
                  <label for="carEngine" class="form-label">Car Engine</label>
                  <input type="text" class="form-control" id="carEngine" name="carEngine">
                </div>
                <div class="mb-3">
                  <label for="seatingCapacity" class="form-label">Seating Capacity</label>
                  <input type="text" class="form-control" id="seatingCapacity" name="seatingCapacity">
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
                <button type="submit" class="btn btn-lg btn-primary" id="addCarButton">Add Car</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!---------------- Edit Modal  ------------------->
      <div class="modal fade" id="editcar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Car</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form update-form">
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="ecarId" name="ecarId">
                </div>
                <div class="mb-3">
                  <label for="ecarName" class="form-label">Car Name</label>
                  <input type="text" class="form-control" id="ecarName" name="ecarName">
                </div>
                <div class="mb-3">
                  <label for="ecarType" class="form-label">Car Type</label>
                  <input type="text" class="form-control" id="ecarType" name="ecarType">
                </div>
                <div class="mb-3">
                  <label for="ecarPrice" class="form-label">Car Price</label>
                  <input type="text" class="form-control" id="ecarPrice" name="ecarPrice">
                </div>
                <div class="mb-3">
                  <label for="efuelType" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="efuelType" name="efuelType">
                </div>
                <div class="mb-3">
                  <label for="emileage" class="form-label">Mileage</label>
                  <input type="text" class="form-control" id="emileage" name="emileage">
                </div>
                <div class="mb-3">
                  <label for="ecarEngine" class="form-label">Car Engine</label>
                  <input type="text" class="form-control" id="ecarEngine" name="ecarEngine">
                </div>
                <div class="mb-3">
                  <label for="eseatingCapacity" class="form-label">Seating Capacity</label>
                  <input type="text" class="form-control" id="eseatingCapacity" name="eseatingCapacity">
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
              <th>Car Id</th>
              <th>Car Image</th>
              <th>Car Name</th>
              <th>Car Type</th>
              <th>Car Price</th>
              <th>Fuel Type</th>
              <th>Mileage</th>
              <th>Engine</th>
              <th>Seating Capacity</th>
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
                echo "<td>" . $row["car_id"] . "</td>";
                echo "<td>" . $row["car_img"] . "</td>";
                echo "<td>" . $row["car_name"] . "</td>";
                echo "<td>" . $row["car_type"] . "</td>";
                echo "<td>" . $row["car_price"] . "</td>";
                echo "<td>" . $row["fuel_type"] . "</td>";
                echo "<td>" . $row["mileage"] . "</td>";
                echo "<td>" . $row["car_engine"] . "</td>";
                echo "<td>" . $row["seating_capacity"] . "</td>";
                echo "<td class='text-truncate'>" . $row['pros'] . "</td>";
                echo "<td class='text-truncate'>" . $row['cons'] . "</td>";
                echo "<td class='text-truncate'>" . $row['description'] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td data-record-id='" . $row['car_id'] . "'><button class='btn edit-btn btn-lg btn-warning'>Edit</button></td>";
                echo "<td data-record-id='" . $row['car_id'] . "'><button class='btn delete-btn btn-lg btn-danger'>Delete</button></td>";
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
    $('#carForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append('carImage', $('#carImage')[0].files)
      $.ajax({
        type: "POST",
        url: "./insert_car.php",
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
        url: "get-car-data.php",
        data: {
          car_id: id
        },
        dataType: "JSON",
        success: function(response) {
          $('#ecarId').val(id)
          $('#ecarName').val(response['car_name']);
          $('#ecarType').val(response['car_type']);
          $('#ecarPrice').val(response['car_price']);
          $('#efuelType').val(response['fuel_type']);
          $('#emileage').val(response['mileage']);
          $('#ecarEngine').val(response['car_engine']);
          $('#eseatingCapacity').val(response['seating_capacity']);
          $('#epros').val(response['pros']);
          $('#econs').val(response['cons']);
          $('#edescription').val(response['description']);
          $('#editcar').modal('show');
        }
      });
    });

    $('.update-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "update-car-details.php",
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
      var recordType = 'car';
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