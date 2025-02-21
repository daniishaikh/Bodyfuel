<?php
include '../config.php';
$admin=new Admin();

$feedid=$_GET['feedid'];

$stmt=$admin->cud("DELETE FROM `feedback` WHERE `feed_id`='$feedid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewFeedback.php';
</script>";

?>