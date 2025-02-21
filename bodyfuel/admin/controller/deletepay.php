<?php
include '../config.php';
$admin=new Admin();

$payid=$_GET['payid'];

$stmt=$admin->cud("DELETE FROM `payment` WHERE `pay_id`='$payid'","delete");
echo "<script>alert('Deleted');window.location='../template/viewPayment.php';</script>";
?>