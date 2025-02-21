<?php
include '../config.php';
$admin=new Admin();

$evid=$_GET['evid'];
$stmt=$admin->cud("UPDATE `events` SET `event_status`='old' WHERE `ev_id`='$evid'","updated");
echo "<script>window.location='../template/viewevents.php';</script>";

?>