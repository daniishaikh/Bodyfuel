<?php
include '../config.php';
$admin=new Admin();



if(isset($_POST['adddiet'])){
    $type=$_POST['type'];
    $about=$_POST['about'];
  
    $diet=$_POST['diet'];
    $diet=implode(",",$diet);

    $stmt=$admin->cud("INSERT INTO `diet`(`lean_gain`,`diet`,`about_diet`,`diet_date`)VALUES('$type','$diet','$about',now())","saved");

    echo "<script>alert('Diet added');
    window.location='../template/viewdiet.php';
    </script>";
}
?>