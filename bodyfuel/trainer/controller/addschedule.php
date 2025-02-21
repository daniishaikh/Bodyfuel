<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['trid'];

if(isset($_POST['schedule'])){
    $slot=$_POST['slots'];
    $ftime=$_POST['ftime'];
    $ttime=$_POST['ttime'];

    $stmt=$admin->cud("INSERT INTO `schedule`(`slot_id`,`tr_id`,`ftime`,`ttime`,`sch_date`)VALUES('$slot','$trid','$ftime','$ttime',now())","saved");
    echo "<script>window.location='../template/viewschedule.php';</script>";
}

?>