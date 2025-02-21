<?php
include '../config.php';
$admin=new Admin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BodyFuel</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    include 'navbar.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
     <?php
    include 'sidebar.php';
     ?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

        <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Report</h4>

                                <br>
                                <br>

                                <form class="forms-sample" method="POST" action="viewreport.php">

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select starting date</label>
                                        <input type="date" name="start_date" class="form-control" id="exampleInputName1" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Select ending date</label>
                                        <input type="date" name="end_date" class="form-control" id="exampleInputName1" required>
                                    </div>


                                    <button type="submit" name="view_report" class="btn btn-primary mr-2">view report</button>
                                    <a href="viewreport.php" class="btn btn-light">Clear</a>
                                </form>
                            </div>
                        </div>
                    </div>


                    <?php
                    //showing order table
                    if (isset($_POST['view_report'])) {

                        $start_date = $_POST['start_date'];

                        $end_date = $_POST['end_date'];
                    ?>

          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales Report</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                            User Name
                          </th>
                          <th>
                            Duration
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      $count=1;
                      $stmt=$admin->ret("SELECT *FROM `membership_order` INNER JOIN `user` ON user.user_id=membership_order.user_id INNER JOIN `membership` ON membership.mem_id=membership_order.mem_id WHERE membership_order.memorder_date BETWEEN '$start_date' AND '$end_date'");
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                        <tr>
                        
                          <td>
                            <?php echo $count++ ?>
                          </td>
                          <td>
                            <?php echo $row['user_name'] ?>
                          </td>
                          <td>
                            <?php echo $row['duration'] ?>
                          </td>
                          <td>
                            ₹<?php echo $row['amount'] ?>
                          </td>
                          <td>
                            <?php echo $row['memorder_date'] ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
           
          
          </div>
          <?php } ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
     <?php
    include 'footer.php';
     ?>
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
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
