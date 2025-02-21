<?php
include '../config.php';
$admin=new Admin();

$trid=$_SESSION['trid'];

if(isset($_POST['addslots'])){
    $slots=$_POST['slots'];

    $stmt=$admin->cud("INSERT INTO `slot`(`tr_id`,`slots`,`slot_date`)VALUES('$trid','$slots',now())","saved");
    echo "<script>window.location='../template/viewslots.php';</script>";
}
?>