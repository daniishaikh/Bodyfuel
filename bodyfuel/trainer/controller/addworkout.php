<?php
include '../config.php';
$admin=new Admin();


$trid=$_SESSION['trid'];

if(isset($_POST['addcategory'])){

   
    $category=$_POST['category'];
   
    $stmt2=$admin->cud("INSERT INTO `body_cat`(`category`,`cat_date`)VALUES('$category',now())","saved");
    echo "<script>alert('Category added');
    window.location='../template/addworkout.php';
    </script>";
}

if(isset($_POST['workout'])){
    $type=$_POST['workouttype'];
    $about=$_POST['about'];
    $category=$_POST['category'];
    $work=$_POST['work'];
    $workout=implode(",",$work);
    
    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);


    $stmt=$admin->cud("INSERT INTO `workout`(`bcat_id`,`lean_gain`,`workout`,`about_workout`,`workout_image`,`workout_date`)VALUES('$category','$type','$workout','$about','$image',now())","saved");

    echo "<script>alert('Workout added');
    window.location='../template/viewworkout.php';
    </script>";
}
?>