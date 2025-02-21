<?php
include '../config.php';
$admin=new Admin();

$stid=$_GET['stid'];

$stmt=$admin->cud("DELETE FROM `slot` WHERE `slot_id`='$stid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewslots.php';
</script>";

?>