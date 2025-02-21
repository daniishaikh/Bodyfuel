<?php
include '../config.php';
$admin=new Admin();

$trid=$_GET['trid'];

$stmt=$admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$trid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

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
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
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
     
   
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php
    include 'sidebar.php';
    ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                
                <div class="card-body">
                  
                  <h4 class="card-title">Update Trainer</h4>
               
                  <form class="forms-sample" action="../controller/updatetrainer.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Trainer Name</label>
                      <input type="text" name="name" value="<?php echo $row['tr_name'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Name">
                      <input type="hidden" name="trid" value="<?php echo $row['tr_id'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Age</label>
                      <input type="text" name="age" value="<?php echo $row['tr_age'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Age">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone Number</label>
                      <input type="tel" name="phone" value="<?php echo $row['tr_phone'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Years Of Experience</label>
                      <input type="number" name="experience" value="<?php echo $row['tr_experience'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Years Of Experience">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Achievements</label>
                      <input type="text" name="achievement" value="<?php echo $row['tr_acheiv'] ?>" class="form-control" id="exampleInputUsername1" placeholder="Achievements">
                    </div>
                    <div class="form-group">
                      <label>Upload Trainers Image</label>
                      <input type="file" name="img" value="<?php echo $row['tr_image'] ?>" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="<?php echo $row['tr_email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" value="<?php echo $row['tr_password'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                   
                   
                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                    
                  </form>
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
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
