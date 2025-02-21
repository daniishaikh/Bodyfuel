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
<?php
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];

$stmt=$admin->ret("SELECT * FROM `membership_order` WHERE `user_id`='$uid'");
$num=$stmt->rowCount();
if($num>0){
?>
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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg5.jpg">
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
    <section class="class-timetable-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span style="color:yellow;">Membership History</span>
                        <h2>Track Your Membership</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="class-timetable">
                        <table style="width: 800px;">
                            <thead>
                                <tr>
                                    <th>Slno</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Enrolled Date</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $stmt = $admin->ret("SELECT * FROM `membership_order` INNER JOIN `membership` ON membership.mem_id=membership_order.mem_id INNER JOIN `user` ON user.user_id=membership_order.user_id WHERE user.user_id='$uid'");
                                $num=$stmt->rowCount();
                                if($num>0){
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <tr>

                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $count++ ?></h5>
                                        </td>
                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $row['duration'] ?></h5>
                                        </td>
                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5>₹<?php echo $row['amount'] ?></h5>
                                        </td>
                                        <td class="dark-bg" data-tsmeta="workout">
                                            <h5><?php echo $row['memorder_date'] ?></h5>
                                        </td>
                                        <?php 
                                        
                                       $current_date = date('Y-m-d');
                                        if($row['memorder_status']=='pending'){
                                            ?>
                                            <td class="dark-bg" data-tsmeta="workout">
                                            <h5 style="color:orange"><?php echo "wait for approval" ?></h5>
                                        </td>
                                        <?php
                                        }
                                        else{?>
                                            <?php if($row['mend_date']<=$current_date){
                                            ?>
                                      
                                            <td class="dark-bg" data-tsmeta="workout">
                                            <h5 style="color:red"><?php echo "Expired" ?></h5>
                                            </td>
                                                <?php } else { ?>
                                                    <td class="dark-bg" data-tsmeta="workout">
                                                    <h5 style="color:green"><?php echo "Active" ?></h5>
                                                    </td>
                                                    <?php } }?>
                                        

                                       
                                    </tr>
                                <?php } ?>
                                <?php } else { ?>
                                    
                                    <h3 style="color:red;margin-left:200px">**No Membership</h3></td>
                                   
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
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


    <?php } else { 


include 'popupmembership.php';



    } } ?>

</body>

</html>