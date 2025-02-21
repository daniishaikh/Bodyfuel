<?php
include '../config.php';
$admin=new Admin();

$suppid=$_GET['suppid'];

$stmt=$admin->cud("DELETE FROM `suppliment` WHERE `supp_id`='$suppid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewsuppliment.php';
</script>";

?>