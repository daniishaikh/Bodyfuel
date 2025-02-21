<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['add'])){

    $name=$_POST['name'];
    $weight=$_POST['weight'];
    $about=$_POST['about'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);
   
    $about=$_POST['about'];

    $stmt=$admin->cud("INSERT INTO `equipments`(`eqp_name`,`eqp_weight`,`eqp_image`,`eqp_about`,`eqp_date`)VALUES('$name','$weight','$image','$about',now())","saved");
    echo "<script>alert('Equipment added');
    window.location='../template/viewequipment.php';
    </script>";
}
?>