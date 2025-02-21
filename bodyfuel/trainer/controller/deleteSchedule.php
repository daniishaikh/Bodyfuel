<?php
include '../config.php';
$admin=new Admin();

$schid=$_GET['schid'];

$stmt=$admin->cud("DELETE FROM `schedule` WHERE `sch_id`='$schid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewschedule.php';
</script>";

?>