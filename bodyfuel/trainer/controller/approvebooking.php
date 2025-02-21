<?php
include '../config.php';
$admin=new Admin();

$booid=$_GET['bookid'];

$stmt=$admin->cud("UPDATE `slots_book` SET `slot_status`='approved'","updated");
echo "<script>window.location='../template/viewbooking.php';</script>";
?>