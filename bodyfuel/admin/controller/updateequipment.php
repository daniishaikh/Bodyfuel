<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['update'])){

    $name=$_POST['name'];
    $eqpid=$_POST['eqpid'];
    $weight=$_POST['weight'];
    $about=$_POST['about'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);
   
    $about=$_POST['about'];

    $stmt=$admin->cud("UPDATE `equipments` SET `eqp_name`='$name',`eqp_weight`='$weight',`eqp_image`='$image',`eqp_about`='$about' WHERE `eqp_id`='$eqpid'","updated");
    echo "<script>alert('Equipment Updated');
    window.location='../template/viewequipment.php';
    </script>";
}
?>