<?php

$admin=new Admin();

?>

<header class="header-section">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="logo">
                <a href="./index.php">
                <img src="./img/hero/bodyfuell.png" style="width:120px; position:absolute; top:0; left:0;">

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
                    <li><a href="./trainers.php">Trainers</a></li>
                    <li><a href="./status.php">Status</a></li>

                    <li><a href="logout.php">Logout</a></li>
                   
                   
                   
                </ul>
            </nav>
        </div>
       
    </div>
    <div class="canvas-open">
        <i class="fa fa-bars"></i>
    </div>
</div>
</header>