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

<body>
    <!-- Page Preloder -->
    <?php
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];

$stmt=$admin->ret("SELECT * FROM `membership_order` WHERE `user_id`='$uid'");
$num=$stmt->rowCount();
if($num>0){
?>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>

        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <?php
    include 'navbar.php';
    ?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg8.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">

                        <h2>Diet Details</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->
    <section class="class-details-section spad">
        <div class="container">
            <div class="row">

                <div>
                    <div style="margin-left: 100px;display:flex;gap:70px;width:800px">
                        
                        <div class="so-categories" style="border: 2px solid orange;width:auto;border-radius:10px;padding:40px">
                        <h4 class="title" style="color:yellow;text-align:center;margin-bottom:20px">Diet Details</h4>
                            <?php
                            $stmt=$admin->ret("SELECT * FROM `diet` WHERE `lean_gain`='shred'");
                                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                    $diet=$row['diet'];
                                    $dietInfo=explode(",",$diet);
                                    foreach($dietInfo as $value){ ?>
                                        <ul style="color:aliceblue">
                                        <li ><?php echo $value ?></li>
                                        </ul>
                                <?php }
                                 ?>
                            

                            ?>

                        </div>

                        <div>
                            <h3 style="color:yellow;margin-bottom:10px">Deit Description</h3>
                            <p style="color:white"><?php echo $row['about_diet'] ?></p>
                        </div>
                        <?php }
                                 ?>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
    <!-- Footer Section End -->



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


    <?php } else { 


include 'popupmembership.php';



    } } ?>

</body>

</html>