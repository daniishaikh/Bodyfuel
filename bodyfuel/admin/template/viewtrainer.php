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
                    <div style="display:flex;justify-content:end">
                <a href="addtrainer.php"   class="btn btn-primary mr-2">Add Trainer</a>
                </div>
                  <h4 class="card-title">Trainer Details</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Slno
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email Id
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            Age
                          </th>
                          <th>
                            Experience
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Action
                          </th>

                        </tr>
                      </thead>
                      <?php
                        $count=1;
                        $stmt=$admin->ret("SELECT * FROM `trainer`");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <tbody>
                        <tr>
                            <td>
                                <?php echo $count++ ?>
                            </td>
                          <td class="py-1">
                            <img src="../controller/<?php echo $row['tr_image'] ?>" style="width:80px;height:80px" alt="image"/>
                          </td>
                          <td>
                            <?php echo $row['tr_name'] ?>
                          </td>
                          <td>
                            <?php echo $row['tr_email'] ?>
                          </td>
                          <td>
                            <?php echo $row['tr_phone'] ?>
                          </td>
                          <td>
                            <?php echo $row['tr_age'] ?>&nbsp;y
                          </td>
                          <td>
                            <?php echo $row['tr_experience'] ?>&nbsp;Years
                          </td>
                          <td>
                            <?php echo $row['tr_date'] ?>
                          </td>
                          <td>
                            <a href="updatetrainer.php?trid=<?php echo $row['tr_id'] ?>"><i style="font-size:28px;color:blue" class="typcn typcn-edit menu-icon"></i></a>
                            <a href="../controller/deletetrainer.php?trid=<?php echo $row['tr_id'] ?>" onclick="return confirm('Are you sure want to delete?')"><i style="font-size:28px;color:red" class="typcn typcn-trash menu-icon"></i></a>
                          </td>
                        
                        </tr>
                      </tbody>
                      <?php } ?>
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
