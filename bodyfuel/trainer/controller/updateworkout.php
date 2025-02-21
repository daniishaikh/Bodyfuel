<?php
include '../config.php';
$admin=new Admin();



if(isset($_POST['updateworkout'])){
    $type=$_POST['type'];
    $wkid=$_POST['wkid'];
    $category=$_POST['category'];
    $work=$_POST['work'];
    $workout=implode(",",$work);

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);


    $stmt=$admin->cud("UPDATE `workout` SET `lean_gain`='$type',`bcat_id`='$category',`workout`='$workout',`workout_image`='$image',`workout_date`=now() WHERE `workout_id`='$wkid'","updated");

    echo "<script>alert('Workout Updated');
    window.location='../template/viewworkout.php';
    </script>";
}
?>