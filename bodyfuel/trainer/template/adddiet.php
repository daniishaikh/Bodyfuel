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
          
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">Add Diet</h4>

                  <form class="forms-sample" action="../controller/adddiet.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputName1">Add Diet For</label>
                        <input type="text" name="type" class="form-control" id="exampleInputName1" placeholder="Type" required>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputName1"><b>Add Diet Details</b></label>
                      <br />
                      <div id="req_input" class="datainputs">
                        <input name="diet[]" placeholder="Diet" type="text" style="width:300px" required>

                      </div>

                      <a href="#" id="addmore" style="margin-top: 10px;" class="btn btn-success mr-2 add_input">Add more</a>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Add Diet Description</label>
                        <textarea type="text" name="about" class="form-control" id="exampleInputName1" placeholder="Diet Description" required></textarea>
                      </div>


                    <button type="submit" name="adddiet" class="btn btn-primary mr-2">Add</button>
                    <a href="adddiet.php" class="btn btn-light">Clear</a>
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
  <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script>
    $(document).ready(function() {
      $("#addmore").click(function() {
        $("#req_input").append('<div class="required_inp"><input name="diet[]" placeholder="Diet" type="text" style="width:300px">' + '<button style="border:none; background-color: transparent;" class="inputRemove"><i style="font-size:25px;color:red" class="typcn typcn-trash menu-icon"></i></button> </div>');
      });
      $('body').on('click', '.inputRemove', function() {
        $(this).parent('div.required_inp').remove()
      });
    });
  </script>
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