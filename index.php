<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page(Admin) || AutoMob</title>
  <link rel="stylesheet" href="CSS/Style.css">
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container form-container">
    <form class="admin-login-form">
      <h2 class="admin-login-heading text-center">
        Admin Login
      </h2>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="uname" class="form-control" id="username" placeholder="Enter Your Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password">
      </div>
      <button type="submit" class="btn btn-primary admin-login-btn">Login</button>
    </form>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="JS/script.js"></script>
</body>

</html>