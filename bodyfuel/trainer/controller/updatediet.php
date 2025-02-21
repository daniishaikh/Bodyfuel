<?php
include '../config.php';
$admin=new Admin();



if(isset($_POST['updatediet'])){
    $type=$_POST['type'];
    $did=$_POST['did'];
  
    $diet=$_POST['diet'];
    $diet=implode(",",$diet);

    $stmt=$admin->cud("UPDATE `diet` SET `lean_gain`='$type',`diet`='$diet',`diet_date`=now() WHERE `diet_id`='$did'","updated");

    echo "<script>alert('Diet Updated');
    window.location='../template/viewdiet.php';
    </script>";
}
?>