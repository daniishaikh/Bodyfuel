<?php
include '../config.php';
$admin=new Admin();

$mooid=$_GET['moid'];

$stmt=$admin->cud("UPDATE `membership_order` SET `memorder_status`='approved' where `morder_id`='$mooid'","updated");
echo "<script>window.location='../template/viewmembers.php';</script>";
?>