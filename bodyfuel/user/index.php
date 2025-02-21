<?php
include 'config.php';
$admin = new Admin();

if(!isset($_SESSION['uid'])){
    header('Location:index1.php');
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BodyFuel</title>

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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/heroo.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>"Empower Your Body:</span>
                                <h1>Where Fitness Meets <strong>BodyFuel."</strong></h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/834286.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>"Power Up Your Workouts</span>
                                <h1><strong>Fuel</strong> Your<strong> Body</strong></h1><span>Your Gym, Your Energy Source."</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span style="color:yellow;">Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="width:1080px;margin-left:180px">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Our gym provides a variety of high quality of fitness Equipments to achieve your fitness goals.<br>with a wide range of 
                            equipments, you can enjoy a effective workout that targets different muscle groups and supports
                            your indivdual fitness goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>A healthy nutrition plan is crucial for acheiving optimal performance and muscle growth Our trainers provides<br> various nutrition 
                        plans to the users for a healthy body and to maintain their fitness according to their weight.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesional training plan</h4>
                        <p>The trainers in our gym are well experienced and they help you in assisting to acheive your fitness goals.
                        and also provide you with a fitness plan to do workout accordingly based on your body weight.</p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->

    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="new.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Purchase Membership To Access More Features</h2>
                        <div class="bt-tips">Life is a race, and gym is the destination.</div>
                        <a href="membership.php" class="primary-btn  btn-normal">Membership</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner Section End -->





    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Life Fit Gym<br>Paragon Tower, Bandiyod</p>
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
        <div style="margin-left: 300px;">
            <div style="margin-top: 100px;">

                <h3 style="color:white;margin-bottom:10px"><b>Write Your Feedback</b></h3>
            </div>
            <div>
                <form action="controller/feedback.php" method="POST">
                    <div style="display:flex;gap:10px">
                        <textarea cols="60px" name="message" type="text"></textarea>

                        <button type="submit" name="feedback" class="btn btn-info" id="">Submit</button>
                    </div>
                </form>
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