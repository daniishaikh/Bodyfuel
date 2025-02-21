<?php
include '../config.php';
$admin=new Admin();

$memid=$_GET['memid'];

$stmt=$admin->cud("DELETE FROM `membership` WHERE `mem_id`='$memid'","delete");
echo "<script>alert('Deleted');window.location='../template/viewmembership.php';</script>";
?>