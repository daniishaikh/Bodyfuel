<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['updatesuppliment'])){

    $name=$_POST['name'];
    $suppid=$_POST['suppid'];
    $about=$_POST['about'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
   
    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $stmt=$admin->cud("UPDATE `suppliment` SET `supp_name`='$name',`supp_about`='$about',`supp_qty`='$qty',`supp_price`='$price',`supp_image`='$image',`supp_date`=now() WHERE `supp_id`='$suppid'","updated");
    echo "<script>alert('Suppliment Updated');
    window.location='../template/viewsuppliment.php';
    </script>";
}
?>