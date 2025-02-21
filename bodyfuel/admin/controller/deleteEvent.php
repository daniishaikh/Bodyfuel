<?php
include '../config.php';
$admin=new Admin();

$evid=$_GET['evid'];

$stmt=$admin->cud("DELETE FROM `events` WHERE `ev_id`='$evid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewevents.php';
</script>";

?>