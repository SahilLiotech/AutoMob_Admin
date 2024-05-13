<?php
include('db.php');

$sql = "SELECT * FROM ev";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EV || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <button type="button" class="btn btn-lg my-btn" data-bs-toggle="modal" data-bs-target="#addev">Add EV</button>

      <!---------------- Add Car Modal ------------------>
      <div class="modal fade" id="addev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Electric Vehicle (EV)</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form" id="evForm">
                <div class="mb-3">
                  <input type="file" class="form-control" id="evImage" name="evImage">
                </div>
                <div class="mb-3">
                  <label for="evName" class="form-label">EV Name</label>
                  <input type="text" class="form-control" id="evName" name="evName">
                </div>
                <div class="mb-3">
                  <label for="evPrice" class="form-label">EV Price</label>
                  <input type="text" class="form-control" id="evPrice" name="evPrice">
                </div>
                <div class="mb-3">
                  <label for="evFuelType" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="evFuelType" name="evFuelType">
                </div>
                <div class="mb-3">
                  <label for="evRange" class="form-label">EV Range</label>
                  <input type="text" class="form-control" id="evRange" name="evRange">
                </div>
                <div class="mb-3">
                  <label for="evMaxSpeed" class="form-label">Max Speed</label>
                  <input type="text" class="form-control" id="evMaxSpeed" name="evMaxSpeed">
                </div>
                <div class="mb-3">
                  <label for="evChargingTime" class="form-label">Charging Time</label>
                  <input type="text" class="form-control" id="evChargingTime" name="evChargingTime">
                </div>
                <div class="mb-3">
                  <label for="evKerbWeight" class="form-label">Kerb Weight</label>
                  <input type="text" class="form-control" id="evKerbWeight" name="evKerbWeight">
                </div>
                <div class="mb-3">
                  <label for="evPros" class="form-label">Pros</label>
                  <textarea class="form-control" id="evPros" name="evPros" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="evCons" class="form-label">Cons</label>
                  <textarea class="form-control" id="evCons" name="evCons" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="evDescription" class="form-label">Description</label>
                  <textarea class="form-control" id="evDescription" name="evDescription" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Add EV</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!---------------- Edit Modal  ------------------->
      <div class="modal fade" id="editev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Edit Electric Vehicle (EV)</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form update-form">
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="evid" name="evid">
                </div>
                <div class="mb-3">
                  <label for="eevName" class="form-label">EV Name</label>
                  <input type="text" class="form-control" id="eevName" name="eevName">
                </div>
                <div class="mb-3">
                  <label for="eevPrice" class="form-label">EV Price</label>
                  <input type="text" class="form-control" id="eevPrice" name="eevPrice">
                </div>
                <div class="mb-3">
                  <label for="eevFuelType" class="form-label">Fuel Type</label>
                  <input type="text" class="form-control" id="eevFuelType" name="eevFuelType">
                </div>
                <div class="mb-3">
                  <label for="eevRange" class="form-label">EV Range</label>
                  <input type="text" class="form-control" id="eevRange" name="eevRange">
                </div>
                <div class="mb-3">
                  <label for="eevMaxSpeed" class="form-label">Max Speed</label>
                  <input type="text" class="form-control" id="eevMaxSpeed" name="eevMaxSpeed">
                </div>
                <div class="mb-3">
                  <label for="eevChargingTime" class="form-label">Charging Time</label>
                  <input type="text" class="form-control" id="eevChargingTime" name="eevChargingTime">
                </div>
                <div class="mb-3">
                  <label for="eevKerbWeight" class="form-label">Kerb Weight</label>
                  <input type="text" class="form-control" id="eevKerbWeight" name="eevKerbWeight">
                </div>
                <div class="mb-3">
                  <label for="eevPros" class="form-label">Pros</label>
                  <textarea class="form-control" id="eevPros" name="eevPros" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="eevCons" class="form-label">Cons</label>
                  <textarea class="form-control" id="eevCons" name="eevCons" rows="5"></textarea>
                </div>
                <div class="mb-3">
                  <label for="eevDescription" class="form-label">Description</label>
                  <textarea class="form-control" id="eevDescription" name="eevDescription" rows="5"></textarea>
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
              <th>EV Id</th>
              <th>EV Image</th>
              <th>EV Name</th>
              <th>EV Price</th>
              <th>Fuel Type</th>
              <th>EV Range</th>
              <th>Max Speed</th>
              <th>Charging Time</th>
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
                echo "<td>" . $row["ev_id"] . "</td>";
                echo "<td>" . $row["ev_img"] . "</td>";
                echo "<td>" . $row["ev_name"] . "</td>";
                echo "<td>" . $row["ev_price"] . "</td>";
                echo "<td>" . $row["fuel_type"] . "</td>";
                echo "<td>" . $row["ev_range"] . "</td>";
                echo "<td>" . $row["max_speed"] . "</td>";
                echo "<td>" . $row["charging_time"] . "</td>";
                echo "<td class='text-truncate'>" . $row['pros'] . "</td>";
                echo "<td class='text-truncate'>" . $row['cons'] . "</td>";
                echo "<td class='text-truncate'>" . $row['description'] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td data-record-id='" . $row['ev_id'] . "'><button class='btn edit-btn btn-lg btn-warning'>Edit</button></td>";
                echo "<td data-record-id='" . $row['ev_id'] . "'><button class='btn delete-btn btn-lg btn-danger'>Delete</button></td>";
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
    $('#evForm').submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      formData.append('evImage', $('#evImage')[0].files)
      $.ajax({
        type: "POST",
        url: "./insert_ev.php",
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
        url: "get-ev-data.php",
        data: {
          ev_id: id
        },
        dataType: "JSON",
        success: function(response) {
          $('#evid').val(id)
          $('#eevName').val(response['ev_name']);
          $('#eevPrice').val(response['ev_price']);
          $('#eevFuelType').val(response['fuel_type']);
          $('#eevRange').val(response['ev_range']);
          $('#eevMaxSpeed').val(response['max_speed']);
          $('#eevChargingTime').val(response['charging_time']);
          $('#eevKerbWeight').val(response['kerb_type']);
          $('#eevPros').val(response['pros']);
          $('#eevCons').val(response['cons']);
          $('#eevDescription').val(response['description']);
          $('#editev').modal('show');
        }
      });
    });

    $('.update-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "update-ev-detail.php",
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
      var recordType = 'ev';
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