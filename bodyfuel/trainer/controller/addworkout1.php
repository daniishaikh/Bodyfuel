<?php
include '../config.php';
$admin=new Admin();


$trid=$_SESSION['trid'];

if(isset($_POST['workout'])){
    $type=$_POST['workouttype'];
    $about=$_POST['about'];
    $category=$_POST['category'];
    $work=$_POST['work'];
    $workout=implode(",",$work);

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);


    $stmt=$admin->cud("INSERT INTO `workout`(`workout_id`,`bcat_id`,`lean_gain`,`workout`,`about_workout`,`workout_image`,`workout_date`)VALUES('$trid','$category','$type','$workout','$about','$image',now())","saved");

    echo "<script>alert('Workout added');
    window.location='../template/viewworkout.php';
    </script>";
}
?>