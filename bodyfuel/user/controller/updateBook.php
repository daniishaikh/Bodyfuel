<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

$trid=$_GET['trid'];
$schid=$_GET['schid'];

$stmt=$admin->cud("INSERT INTO `slots_book`(`tr_id`,`user_id`,`sch_id`,`slot_status`,`book_date`)VALUES('$trid','$uid','$schid','pending',now())","saved");
echo "<script>window.location='../viewTrainers.php?trid=$trid';</script>";
?>