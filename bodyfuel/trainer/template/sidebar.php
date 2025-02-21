<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #ffffcc; /* Yellow background */
      font-family: Arial, sans-serif;
    }
    
    .sidebar {
      background-color: #f8f9fa; /* Light gray background */
      width: 250px; /* Adjust the width as needed */
      padding: 20px;
    }

    .sidebar .logo {
      margin-bottom: 20px;
    }

    .nav-link {
      color: #333; /* Dark text color */
    }

    .nav-link:hover {
      color: #000; /* Darker text color on hover */
    }

    .menu-title {
      margin-left: 10px; /* Adjust the margin as needed */
    }
  </style>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="logo">
    <img src="images/logo.png" alt="Logo">
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="typcn typcn-user menu-icon"></i>
        <span class="menu-title">Manage User</span>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="viewuser.php">View User</a></li>
        </ul>
      </div>
    </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements1" aria-expanded="false" aria-controls="form-elements1">
      <i class="typcn typcn-th-small menu-icon"></i>
      <span class="menu-title">Manage Workout</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements1">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewworkout.php">View Workout</a></li>
      </ul>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false" aria-controls="form-elements2">
      <i class="typcn typcn-beer menu-icon"></i>
      <span class="menu-title">Manage Diet</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements2">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewdiet.php">View Diet</a></li>
      </ul>
    </div>
  </li>
  

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements3" aria-expanded="false" aria-controls="form-elements3">
      <i class="typcn typcn-stopwatch menu-icon"></i>
      <span class="menu-title">Manage Schedule</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements3">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewschedule.php">View Schedule</a></li>
      </ul>
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewslots.php">View Slots</a></li>
      </ul>
    </div>
   
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements8" aria-expanded="false" aria-controls="form-elements8">
      <i class="typcn typcn-stopwatch menu-icon"></i>
      <span class="menu-title">Manage Booking</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements8">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewbooking.php">View Booking</a></li>
      </ul>
     
    </div>
   
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements4" aria-expanded="false" aria-controls="form-elements4">
      <i class="typcn typcn-book menu-icon"></i>
      <span class="menu-title">User Suggestions</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements4">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewsuggestion.php">View Suggestions</a></li>
      </ul>
    </div>
  </li>
</ul>
</nav>
</body>
</html>
