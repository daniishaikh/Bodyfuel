<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Document</title>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <!-- Logo -->
  <div class="text-center mb-4">
    <img src="images/logo.png" alt="Logo" style="width: 100px;">
  </div>

  <!-- Menu Items -->
  <ul class="nav">
    <!-- Your menu items go here -->
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        <!-- <div class="badge badge-danger">new</div> -->
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
      <i class="typcn typcn-user menu-icon"></i>
      <span class="menu-title">Manage User</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewuser.php">View User</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements1" aria-expanded="false" aria-controls="form-elements1">
      <i class="typcn typcn-user-add menu-icon"></i>
      <span class="menu-title">Manage Trainer</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements1">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewtrainer.php">View Trainer</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements10" aria-expanded="false" aria-controls="form-elements10">
      <i class="typcn typcn-bookmark menu-icon"></i>
      <span class="menu-title">Manage Membership</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements10">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewmembership.php">View Membership</a></li>
        <li class="nav-item"><a class="nav-link" href="viewmembers.php">View Members</a></li>
      </ul>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements2" aria-expanded="false" aria-controls="form-elements2">
      <i class="typcn typcn-chevron-right menu-icon"></i>
      <span class="menu-title">Manage Equipment</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements2">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewequipment.php">View Equipments</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements3" aria-expanded="false" aria-controls="form-elements3">
      <i class="typcn typcn-clipboard menu-icon"></i>
      <span class="menu-title">Manage Events</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements3">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewevents.php">View Events</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements4" aria-expanded="false" aria-controls="form-elements4">
      <i class="typcn typcn-beer menu-icon"></i>
      <span class="menu-title">Manage Suppliments</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements4">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewsuppliment.php">View Suppliments</a></li>
      </ul>
    </div>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements5" aria-expanded="false" aria-controls="form-elements5">
      <i class="typcn typcn-contacts menu-icon"></i>
      <span class="menu-title">Report</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements5">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewReport.php">View Report</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements6" aria-expanded="false" aria-controls="form-elements6">
      <i class="typcn typcn-ticket menu-icon"></i>
      <span class="menu-title">Payments</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements6">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewPayment.php">View Payment</a></li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#form-elements7" aria-expanded="false" aria-controls="form-elements7">
      <i class="typcn typcn-book menu-icon"></i>
      <span class="menu-title">Feedback</span>
      <!-- <i class="menu-arrow"></i> -->
    </a>
    <div class="collapse" id="form-elements7">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link" href="viewFeedback.php">View Feedback</a></li>
  </ul>
</nav>
</body>
</html>
