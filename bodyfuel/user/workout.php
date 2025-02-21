<?php
include 'config.php';
$admin = new Admin();

$bcatid = $_GET['catid'];
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>


<?php
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];

$stmt=$admin->ret("SELECT * FROM `membership_order` WHERE `user_id`='$uid'");
$num=$stmt->rowCount();
if($num>0){
?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>


    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Workout detail</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="#">Workout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->

    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span style="color:yellow;">Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $stmt2 = $admin->ret("SELECT * FROM `workout` INNER JOIN `body_cat` ON body_cat.bcat_id=workout.bcat_id WHERE body_cat.bcat_id='$bcatid'");
                while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="../trainer/controller/<?php echo $row['workout_image'] ?>" alt="" style="width:300px;height:300px;over-hidden:hidden;object-fit:cover">
                            </div>
                            <div class="ci-text">

                                <h5><?php echo $row['category'] ?>&nbsp; Workout For&nbsp;<?php echo $row['lean_gain'] ?></h5>
                                <a href="viewWorkout.php?wkid=<?php echo $row['workout_id'] ?>"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>



            </div>

        
        </div>
    </section>






    <!-- Class Details Section End -->

    <!-- Class Timetable Section Begin -->

    <!-- Class Timetable Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>The Bodyfuel Fitness Gym<br>Marnamikatte, Mangaluru</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>78995 00595</li>
                            <li>99803 56855</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.bodyfuel@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <?php

    include 'footer.php';
    ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>
<?php } else { 


include 'popupmembership.php';



    } } ?>

</html>