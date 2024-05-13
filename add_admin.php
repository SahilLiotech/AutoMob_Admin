<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_Register || AutoMob</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
  <div class="d-flex flex-row">
    <?php include('sidebar.php'); ?>
    <section class="container p-4 my-container">
      <div class="profile-form-container">
        <form class="form admin-add-form">
          <div class="profile-img text-center">
            <img src="imgs/admin-user.png" alt="">
            <h2 class="mt-4">Add Admin</h2>
          </div>
          <div class="mb-3 mt-4">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" aria-describedby="FullNameHelp" name="fullname">
          </div>
          <div class="mb-3">
            <label for="uname" class="form-label">UserName</label>
            <input type="text" class="form-control" id="uname" aria-describedby="UnameHelp" name="uname">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Add Admin</button>
        </form>
      </div>
    </section>
  </div>
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
</body>

</html>