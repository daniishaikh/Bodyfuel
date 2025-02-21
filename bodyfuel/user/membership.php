<?php
include 'config.php';
$admin=new Admin();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Body-Fuel</title>

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

<body>
    <!-- Page Preloder -->
  

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
      
       
       
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
 <?php
include 'navbar.php';
 ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Membership Plan</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <span style="color:yellow;">Membership</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section service-pricing spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span style="color:yellow;">Our Membership Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php

                $stmt = $admin->ret("SELECT * FROM `membership`");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                ?>
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">

                            <h3>MEMBERSHIP</h3>
                            <div class="pi-price">
                                <h2 style="color:yellow;">₹<?php echo $row['amount'] ?></h2>
                                <span style="color:yellow;"><?php echo $row['duration'] ?></span>
                            </div>




                            <?php
                            $about = $row['about'];
                            $details = explode(",", $about);
                            foreach ($details as $value) {
                            ?>
                                <ul style="margin-bottom: 2px;">
                                    <li><?php echo $value ?></li>

                                </ul>
                            <?php } ?>

                                    <a href="payment.php?memid=<?php echo $row['mem_id'] ?>" class="primary-btn pricing-btn">Enroll now</a>

                            
                            
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

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

</html>