<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['addsuppliment'])){

    $name=$_POST['name'];
    $about=$_POST['about'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
   
    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $stmt=$admin->cud("INSERT INTO `suppliment`(`supp_name`,`supp_about`,`supp_qty`,`supp_price`,`supp_image`,`supp_date`)VALUES('$name','$about','$qty','$price','$image',now())","saved");
    echo "<script>alert('Suppliment added');
    window.location='../template/viewsuppliment.php';
    </script>";
}
?>