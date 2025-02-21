<?php
include '../config.php';
$admin=new Admin;

if(isset($_POST['membership'])){
    $duration=$_POST['duration'];
    $price=$_POST['price'];
    $expiry=$_POST['expiry'];
  
    $content=$_POST['content'];
    $details=implode(",",$content);

    $stmt=$admin->cud("INSERT INTO `membership`(`duration`,`expiry_date`,`amount`,`about`,`mem_date`)VALUES('$duration','$expiry','$price','$details',now())","saved");
    echo "<script>window.location='../template/viewmembership.php';</script>";
}
    ?>