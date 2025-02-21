<?php
include '../config.php';
$admin = new Admin();

if(!isset($_SESSION['adid'])){
  header('Location:login.php');
}


$stmt = $admin->ret("SELECT count(*) from `user`");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$user = implode($row);

$stmt2 = $admin->ret("SELECT count(*) from `trainer`");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

$trainer = implode($row2);

$stmt3 = $admin->ret("SELECT count(*) from `membership_order`");
$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

$morder = implode($row3);




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Body Fuel</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php
    include 'navbar.php';
    ?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
      include 'sidebar.php';
      ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-xl-6 grid-margin stretch-card flex-column">
              <h5 class="mb-2 text-titlecase mb-4">Status </h5>
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="mb-0 text-muted">Registered Users</p>

                      </div>
                      <h4><?php echo $user ?></h4>
                      <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                          <p class="mb-2 text-muted">Number Of Trainers</p>
                          <h4><?php echo $trainer ?></h4>
                        </div>
                      </div>
                      <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row h-100">
                <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="text-muted">Total Membership Purchased</p>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <h3 class="mb-"><?php echo $morder ?></h3>

                      </div>
                      <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                    </div>
                  </div>
                  <div class="card" style="margin-left: 20px;">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="text-muted">Number Of New Events</p>
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <?php
                        $stmt4=$admin->ret("SELECT count(*) from `events` WHERE `event_status`='new'");
                        $row4=$stmt4->fetch(PDO::FETCH_ASSOC);

                        $event = implode($row4);
                    
                        ?>
                        <h3 class="mb-"><?php echo $event ?></h3>
                         
                      </div>
                      <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                    </div>
                  </div>
                </div>

              </div>







            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      <!-- base:js -->
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <script src="vendors/chart.js/Chart.min.js"></script>
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/dashboard.js"></script>
      <!-- End custom js for this page-->
</body>

</html>