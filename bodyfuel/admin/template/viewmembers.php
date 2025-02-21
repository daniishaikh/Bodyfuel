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
               
                  <h4 class="card-title">Members Details</h4>
                  
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
                            Membership Duration
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Enrolled Date
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                          
                        </tr>
                      </thead>

                     
                      <tbody>
                      <?php
                        $count=1;
                        $stmt=$admin->ret("SELECT * FROM `membership_order` INNER JOIN `membership` ON membership.mem_id=membership_order.mem_id INNER JOIN `user` ON user.user_id=membership_order.user_id");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <tr>
                         
                          <td><?php echo $count++ ?></td>
                          <td><?php echo $row['user_name'] ?></td>
                          <?php if($row['duration']=='1 months'){ ?>
                          <td><span class="btn btn-info"><?php echo $row['duration'] ?></span></td>
                          <?php } else if($row['duration']=='3 months') { ?>
                            <td><span class="btn btn-warning"><?php echo $row['duration'] ?></span></td>
                          <?php } else if($row['duration']=='6 months') { ?>
                            <td><span class="btn btn-primary"><?php echo $row['duration'] ?></span></td>
                          <?php } else { ?>
                            <td><span class="btn btn-success"><?php echo $row['duration'] ?></span></td>
                            <?php } ?>


                          <td>₹<?php echo $row['amount'] ?></td>
                          <td><?php echo $row['memorder_date'] ?></td>
                          <?php $current_date = date('Y-m-d');
                          if($row['memorder_status']=='pending'){
                            ?>
                            <td><a href="../controller/approvemember.php?moid=<?php echo $row['morder_id'] ?>" class="btn btn-danger">Approve</a></td>
                          <?php }
                          else{
                              if($row['mend_date']<=$current_date){
                                        ?>
                              <td><button class="btn btn-info"><?php echo "Expired" ?></button></td>
                              <?php } else { ?>
                              <td><button class="btn btn-info"><?php echo "Active" ?></button></td>
                              <?php }} ?>
                              <td>
                            <a href="../controller/deleteMembers.php?memid=<?php echo $row['morder_id'] ?>" onclick="return confirm('Are you sure want to delete?')"><i style="font-size:28px;color:red" class="typcn typcn-trash menu-icon"></i></a>
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