<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['trid'];

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
                    
                  <h4 class="card-title">Booking Details</h4>
                  
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
                            User Email
                          </th>
                          <th>
                            Batch
                          </th> 
                          <th>
                            Timing From
                          </th> 
                          <th>
                            Timing To
                          </th> 
                          <th>
                            Status
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
                        $stmt=$admin->ret("SELECT * FROM `slots_book` INNER JOIN `trainer` ON trainer.tr_id=slots_book.tr_id INNER JOIN `user` ON user.user_id=slots_book.user_id INNER JOIN `schedule` ON schedule.sch_id=slots_book.sch_id WHERE  trainer.tr_id='$trid'");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <tbody>
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
                          <td>
                            <?php 
                            $slid=$row['slot_id'];
                            $stmt3=$admin->ret("SELECT * FROM `slot` WHERE `slot_id`='$slid'");
                            while($row3=$stmt3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <?php echo $row3['slots'] ?>
                            <?php } ?>
                          </td>
                          <td>
                            <?php echo $row['ftime'] ?>
                          </td>
                          <td>
                            <?php echo $row['ttime'] ?>
                          </td>
                          <td>
                            <?php
                            if($row['slot_status']=='pending'){
                            ?>
                            <a href="../controller/approvebooking.php?bookid=<?php echo $row['book_id'] ?>" class="btn btn-danger">Approve</a>
                            <?php } if($row['slot_status']=='approved'){?>
                                <button class="btn btn-success">Approved</button>
                                <?php } ?>
                          </td>
                          <td>
                            <?php echo $row['book_date'] ?>
                          </td>
                          <td>
                            <a href="../controller/deleteBook.php?bookid=<?php echo $row['book_id'] ?>" onclick="return confirm('Are you sure want to delete?')"><i style="font-size:28px;color:red" class="typcn typcn-trash menu-icon"></i></a>
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
