<?php
include 'config.php';
$admin = new Admin();

$memid = $_GET['memid'];
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



    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section" style="background-color:black;padding:50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                    <a href="./index.php">
                   <h2 style="color:orange;background-color:black;padding:20px;border-radius:5px">Body-Fuel</h2>
                </a>    
                    </div>
                </div>
                <div class="col-lg">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./equipments.php">Equipments</a></li>
                            <li><a href="./suppliment.php">Suppliment</a></li>
                            <li><a href="./viewEvents.php">Events</a></li>

                            <li><a href="#">Workout</a>
                                <ul class="dropdown">
                                    <?php
                                    $stmt = $admin->ret("SELECT * FROM `body_cat`");
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <li><a href="workout.php?catid=<?php echo $row['bcat_id'] ?>"><?php echo $row['category'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="#">Diet</a>
                                <ul class="dropdown">
                                    <li><a href="shred.php">Shredding</a></li>
                                    <li><a href="bulk.php">Bulking</a></li>
                                </ul>
                            </li>
                            <li><a href="./membership.php">Membership</a></li>



                        </ul>
                    </nav>
                </div>

            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <!-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Membership Plan</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <span>Membership</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <section class="pricing-section service-pricing spad" style="margin-top: 100px;background-color:orange">
        <!-- <div style="background-color: orange;width:600px;margin-left:300px;border-ra">
        <h2 style="color:white;text-align:center">Scan and Pay</h2>
        <div style="margin-top: 50px;">
            <img src="image/qrcode.png" alt="">
        </div>

    </div> -->


        <div class="container d-flex justify-content-center mt-5">
            <div class="card" style="width:400px;padding:30px;border-radius:10px">



                <div>
                    <h2 style="text-align: center;">Scan and Pay</h2>
                    <div class="d-flex pt-3 pl-3">

                        <div style="margin-left: 60px;"> <img src="image/qrcode.png" alt="" width="200" height="200"> </div>

                    </div>


                    <div class="py-2  px-3">
                        <div class="first pl-2 d-flex py-2">
                            <div class="form-check">

                            </div>
                            <?php
                            $stmt = $admin->ret("SELECT * FROM `membership` WHERE `mem_id`='$memid'");
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <div><span class="head">Total Pay Amount</span>
                                    <div><span>
                                            <h5>₹<?php echo $row['amount'] ?></h5>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <form action="controller/membershipOrder.php" method="POST">
                        <div class="py-2  px-5">
                            <span class="head">Enter Transaction Number</span>

                            <input type="text" name="transaction" placeholder="Transaction Number" required>
                            <input type="hidden" name="memid" value="<?php echo $memid ?>" >
                        </div>


                        <div class="d-flex justify-content-between px-3 pt-4 pb-3">
                            <div><a href="membership.php" class="btn btn-secondary">Go back</a></div>
                            <button type="submit" name="payment" class="btn btn-primary button">Pay Amount</button>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </section>


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