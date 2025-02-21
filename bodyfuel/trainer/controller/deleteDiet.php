<?php
include '../config.php';
$admin=new Admin();

$did=$_GET['dtid'];

$stmt=$admin->cud("DELETE FROM `diet` WHERE `diet_id`='$did'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewdiet.php';
</script>";

?>