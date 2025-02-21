<?php
include 'config.php';
$admin = new Admin();



if (isset($_GET['wkid'])) {
    $wkid = $_GET['wkid'];
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
    if (isset($_SESSION['uid'])) {
        $uid = $_SESSION['uid'];

        $stmt = $admin->ret("SELECT * FROM `membership_order` WHERE `user_id`='$uid'");
        $num = $stmt->rowCount();
        if ($num > 0) {
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
            <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="breadcrumb-text">
                                <?php
                                $stmt = $admin->ret("SELECT * FROM `workout` INNER JOIN `body_cat` ON body_cat.bcat_id=workout.bcat_id WHERE `workout_id`='$wkid'");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <h2><?php echo $row['category'] ?>&nbsp;Workout</h2>

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
                        <div class="col-lg-8">
                            <div class="class-details-text">
                                <div class="cd-pic">
                                    <img src="../trainer/controller/<?php echo $row['workout_image'] ?>" style="object-fit:cover;overflow:hidden;width:400px;height:400px" alt="">
                                </div>
                                <div class="cd-text">
                                    <div class="cd-single-item">
                                        <h3>Workout Description</h3>
                                        <p><?php echo $row['about_workout'] ?></p>
                                    </div>
                                    <div style="margin-top: 50px;margin-bottom: 30px;">
                                        <h3 style="color:white"><b> Write Your Suggestion</b></h3>
                                    </div>
                                    <div>
                                        <form action="controller/suggestion.php" method="POST">
                                            <div style="display:flex;gap:10px">
                                                <textarea cols="60px" name="message" type="text"></textarea>
                                                <input type="hidden" name="wkid" value="<?php echo $row['workout_id'] ?>">

                                                <button type="submit" name="suggest" class="btn btn-info" id="">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="sidebar-option">
                                <div class="so-categories">
                                    <h4 class="title"><?php echo $row['category'] ?>&nbsp;Workout</h4>
                                    <?php
                                    $workout = $row['workout'];
                                    $workoutList = explode(",", $workout);
                                    foreach ($workoutList as $value) {  ?>
                                        <ul style="font-size:20px">
                                            <li style="color:burlywood;list-style-type:disc;"> <?php echo $value ?></li>
                                        </ul>
                                    <?php   } ?>
                                </div>


                            </div>
                        <?php } ?>

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
        }
    } ?>

</body>

</html>