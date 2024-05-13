<?php
include('db.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <div class="profile-form-container">
        <form class="form">
          <div class="profile-img text-center">
            <img src="imgs/admin-user.png" alt="">
            <h2 class="mt-4">Admin Profile</h2>
          </div>
          <div class="mb-3 mt-4">
            <label for="exampleInputFullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" value=<?php echo  $_SESSION['fullname']; ?> id="exampleInputFullName" aria-describedby="FullNameHelp" readonly>
          </div>
          <div class="mb-3">
            <label for="exampleInputUname" class="form-label">UserName</label>
            <input type="email" class="form-control" value=<?php echo $_SESSION['uname']; ?> id="exampleInputUname" aria-describedby="UnameHelp" readonly>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value=<?php echo $_SESSION['email']; ?> id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
          </div>
        </form>
      </div>
    </section>
  </div>
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>