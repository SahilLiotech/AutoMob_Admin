<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<nav class="navbar active-nav fixed-top navbar-expand d-flex flex-column align-item-start sidebar" id="sidebar">
  <div class="logo-container flex align-items-center justify-content-center">
    <img src="imgs/logo-icon.png" class="logo-img" />Auto<span>Mob</span>
  </div>
  <ul class="navbar-nav d-flex flex-column sidebar-link mt-3 w-100">
    <li class="nav-item w-100 <?php echo ($current_page === 'dashboard.php') ? 'active' : ''; ?>">
      <a href="dashboard.php" class="nav-link text-light pl-4 "><img src="imgs/dashboard.png" alt="" srcset="" width="20px" height="20px" />
        Dashboard</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'cars.php') ? 'active' : ''; ?>">
      <a href="cars.php" class="nav-link text-light pl-4"><img src="imgs/admin-car.png" alt="" srcset="" width="20px" height="20px" />Cars</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'bike.php') ? 'active' : ''; ?>">
      <a href="bike.php" class="nav-link text-light pl-4"><img src="imgs/admin-bike.png" alt="" srcset="" width="20px" height="20px" />Bikes</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'scooter.php') ? 'active' : ''; ?>">
      <a href="scooter.php" class="nav-link text-light pl-4"><img src="imgs/admin-scooter.png" alt="" srcset="" width="20px" height="20px" />Scooters</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'ev.php') ? 'active' : ''; ?>">
      <a href="ev.php" class="nav-link text-light pl-4"><img src="imgs/admin-ev.png" alt="" srcset="" width="20px" height="20px" />Electric Vehicles</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'user.php') ? 'active' : ''; ?>">
      <a href="user.php" class="nav-link text-light pl-4"><img src="imgs/admin-user.png" alt="" srcset="" width="20px" height="20px" />Users</a>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'feedback.php') ? 'active' : ''; ?>">
      <a href="feedback.php" class="nav-link text-light pl-4"><img src="imgs/admin-feedback.png" alt="" srcset="" width="20px" height="20px" />Feedbacks</a>
    </li>
    <li class="nav-item dropdown w-100">
      <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-target="#navbarDropdownMenu" aria-expanded="false"><img src="imgs/admin-sale.png" alt="" srcset="" width="20px" height="20px" />Sales</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
          <a href="car_sale.php" class="dropdown-item text-light pl-4 p-2">Car Sales</a>
        </li>
        <li>
          <a href="bike_sale.php" class="dropdown-item text-light pl-4 p-2">Bike Sales</a>
        </li>
        <li>
          <a href="scooter_sale.php" class="dropdown-item text-light pl-4 p-2">Scooter Sales</a>
        </li>
        <li>
          <a href="ev_sale.php" class="dropdown-item text-light pl-4 p-2">EV Sales</a>
        </li>
      </ul>
    </li>
    <li class="nav-item w-100 <?php echo ($current_page === 'logout.php') ? 'active' : ''; ?>">
      <a href="logout.php" class="nav-link text-light pl-4"><img src="imgs/admin-logout.png" alt="" srcset="" width="20px" height="20px" />Logout</a>
    </li>
    <li class="nav-item dropdown <?php echo ($current_page === 'admin.php') ? 'active' : ''; ?>">
      <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-target="#navbarDropdownMenu" aria-expanded="false">Admin</a>
      <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
        <li>
          <a href="profile.php" class="dropdown-item text-light pl-4 p-2">Profile</a>
        </li>
        <li>
          <a href="add_admin.php" class="dropdown-item text-light pl-4 p-2">Add Admin</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>