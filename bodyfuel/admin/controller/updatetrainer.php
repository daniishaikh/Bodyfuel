<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['update'])){

    $trid=$_POST['trid'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $experience=$_POST['experience'];
    $achievement=$_POST['achievement'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $pass=password_hash($password,PASSWORD_BCRYPT);
    $stmt=$admin->cud("UPDATE `trainer` SET `tr_name`='$name',`tr_age`='$age',`tr_phone`='$phone',`tr_experience`='$experience',`tr_acheiv`='$achievement',`tr_email`='$email',`tr_image`='$image',`tr_password`='$pass' WHERE `tr_id`='$trid'","updated");
    echo "<script>alert('Updated');
    window.location='../template/viewtrainer.php';
    </script>";

}
?>