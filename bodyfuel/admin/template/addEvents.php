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
           
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Events</h4>
                 
                  <form class="forms-sample" action="../controller/addevent.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Event</label>
                      <input type="text" name="event" class="form-control" id="exampleInputName1" placeholder="Event" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputName1">Event Date</label>
                      <input type="date" name="eventdate" class="form-control" id="exampleInputName1" placeholder="Event Date" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputName1">Event Start Timing</label>
                      <input type="time" name="starttime" class="form-control" id="exampleInputName1" placeholder="Event Timing" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Event End Timing</label>
                      <input type="time" name="endtime" class="form-control" id="exampleInputName1" placeholder="Event Timing" required>
                    </div>
                   
                    <div class="form-group">
                      <label>Upload Event Image</label>
                      <input type="file" name="img" class="file-upload-default" required>
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Event Description</label>
                      <textarea name="about" class="form-control" id="exampleInputCity1" placeholder="Description" required></textarea>
                    </div>
                   
                    <button type="submit" name="addevent" class="btn btn-primary mr-2">Add</button>
                    <a href="addEvents.php" class="btn btn-light">Clear</a>
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
