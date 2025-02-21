<?php
include 'config.php';
$admin = new Admin();

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
    <!-- <div id="preloder">
            <div class="loader"></div>
        </div> -->

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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Our Trainers</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>

                            <span style="color:yellow;">Trainers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Timetable Section Begin -->

    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span style="color:yellow;">Our Trainers</span>

                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $stmt = $admin->ret("SELECT * FROM `trainer`");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="../admin/controller/<?php echo $row['tr_image'] ?>" alt="" style="width:300px;height:300px;over-hidden:hidden;object-fit:cover">
                            </div>
                            <div class="ci-text">

                                <h5><?php echo $row['tr_name'] ?></h5>
                                <a href="viewTrainers.php?trid=<?php echo $row['tr_id'] ?>"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                  
                    </div>
                    <?php } ?>
            </div>
    </section>

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