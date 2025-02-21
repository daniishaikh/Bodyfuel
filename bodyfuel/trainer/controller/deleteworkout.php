<?php
include '../config.php';
$admin=new Admin();

$wkid=$_GET['wkid'];

$stmt=$admin->cud("DELETE FROM `workout` WHERE `workout_id`='$wkid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewworkout.php';
</script>";

?>