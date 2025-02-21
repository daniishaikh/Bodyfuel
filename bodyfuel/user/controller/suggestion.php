<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];
if(isset($_POST['suggest'])){

    $wkid=$_POST['wkid'];
    $message=$_POST['message'];

    $stmt=$admin->cud("INSERT INTO `suggestion`(`workout_id`, `user_id`, `sugg`, `sugg_date`) VALUES('$wkid','$uid','$message',now())","saved");
    echo "<script>window.location='../viewWorkout.php?wkid=$wkid';</script>";
}
?>