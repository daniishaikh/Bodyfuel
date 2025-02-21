<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['feedback'])){
    $message=$_POST['message'];

    $stmt=$admin->cud("INSERT INTO `feedback`(`user_id`,`feed`,`feed_date`)VALUES('$uid','$message',now())","saved");
    echo "<script>window.location='../index.php';</script>";
}

?>