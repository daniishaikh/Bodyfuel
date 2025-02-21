<?php
include '../config.php';
$admin=new Admin();

$eqid=$_GET['eqid'];

$stmt=$admin->cud("DELETE FROM `equipments` WHERE `eqp_id`='$eqid'","deleted");
echo "<script>alert('Deleted');
window.location='../template/viewequipment.php';
</script>";

?>