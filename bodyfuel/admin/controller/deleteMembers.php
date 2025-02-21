<?php
include '../config.php';
$admin=new Admin();

$memid=$_GET['memid'];

$stmt=$admin->cud("DELETE FROM `membership_order` WHERE `morder_id`='$memid'","delete");
echo "<script>alert('Deleted');window.location='../template/viewmembers.php';</script>";
?>