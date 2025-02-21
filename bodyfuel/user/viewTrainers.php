<?php
include 'config.php';
$admin = new Admin();

$uid = $_SESSION['uid'];

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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Membership Status</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>

                            <span style="color:yellow;">Status</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Timetable Section Begin -->

    <section class="testimonial-section spad">
        <?php

        if (isset($_GET['trid'])) {
            $trid = $_GET['trid'];

            $stmt = $admin->ret("SELECT * FROM `trainer` WHERE `tr_id`='$trid'");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <span style="color:yellow;">Our Trainer</span>
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="ts_slider owl-carousel">
                        <div class="ts_item">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="ti_pic">
                                        <img src="../admin/controller/<?php echo $row['tr_image'] ?>" alt="">
                                    </div>
                                    <div class="ti_text">
                                        <h5><?php echo $row['tr_name'] ?></h5>
                                        <p>Age&nbsp;:<?php echo $row['tr_age'] ?></p>
                                        <p>Experience&nbsp;:<?php echo $row['tr_experience'] ?></p>
                                        <p><?php echo $row['tr_acheiv'] ?></p>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        <?php }
        } ?>

        <div class="row" style="margin-left: 220px;">
            <div class="col-lg-12">
                <div class="class-timetable">
                    <table>
                        <thead>
                            <tr>
                                <th>Slno</th>
                                <th>Slots</th>
                                <th>From Timing</th>
                                <th>To Timing</th>

                                <th>Book</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (isset($_GET['trid'])) {
                                $trid = $_GET['trid'];

                                $count = 1;
                                $stmt = $admin->ret("SELECT * FROM `schedule` INNER JOIN `slot` ON slot.slot_id=schedule.slot_id INNER JOIN `trainer` ON trainer.tr_id=schedule.tr_id WHERE trainer.tr_id='$trid'");
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                    <tr>

                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $count++ ?></h5>
                                        </td>


                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $row['slots'] ?></h5>
                                        </td>
                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $row['ftime'] ?></h5>
                                        </td>
                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $row['ttime'] ?></h5>
                                        </td>

                                        <td class="dark-bg" data-tsmeta="workout">
                                            <?php
                                            $schid = $row['sch_id'];
                                            $stmt2 = $admin->ret("SELECT * FROM `slots_book` WHERE `tr_id`='$trid' AND `user_id`='$uid' AND `sch_id`=' $schid'");
                                            $num = $stmt2->rowCount();
                                            if ($num == 0) { ?>
                                                <a href="controller/updateBook.php?trid=<?php echo $row['tr_id'] ?>&schid=<?php echo $row['sch_id'] ?>" class="btn btn-warning">Book</a>
                                            <?php } else { ?>

                                                <?php
                                                while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                                    if ($row2['slot_status'] == "pending") {
                                                ?>
                                                        <button class="btn btn-danger" style="width: 100px;">Wait For Approve</button>
                                                    <?php } else if ($row2['slot_status'] == "approved") { ?>
                                                        <button class="btn btn-success">Booked</button>
                                            <?php }
                                                }
                                            } ?>
                                        </td>


                                    </tr>
                            <?php }
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
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

</html>