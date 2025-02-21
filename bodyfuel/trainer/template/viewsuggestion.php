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
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View User Suggestion</h4>
                 
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
                            Email Id 
                          </th>
                          <th>
                            Shred/Gain
                          </th>
                          <th>
                            Workout
                          </th>
                          <th>
                            Suggestion
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $count=1;
                        $stmt=$admin->ret("SELECT * FROM `suggestion` INNER JOIN `user` ON user.user_id=suggestion.user_id INNER JOIN `workout` ON workout.workout_id=suggestion.workout_id order by sugg_id DESC ");
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
                            <?php echo $row['user_email'] ?>
                          </td>
                        
                            <?php 
                            $wkid=$row['workout_id'];
                              $stmt2=$admin->ret("SELECT * FROM `workout` INNER JOIN `body_cat` ON body_cat.bcat_id=workout.bcat_id WHERE workout.workout_id='$wkid'");
                              while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                              <td>
                            <?php echo $row2['lean_gain'] ?>
                          </td>
                              <td>
                            <?php echo $row2['category'] ?>
                          </td>
                          
                          <?php } ?>
                          <td>
                          <!-- <textarea value="" cols="30" readonly rows="4"></textarea> -->
                          <input type="text" value="<?php echo $row['sugg']?>">
                          </td>   
                          <td>
                            <?php echo $row['sugg_date'] ?>
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
