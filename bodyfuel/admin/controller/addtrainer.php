<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['register'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $experience=$_POST['experience'];
    $achievement=$_POST['achievement'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);
   

    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $stmt=$admin->ret("SELECT * FROM `trainer` WHERE `tr_email`='$email'");
    $num=$stmt->rowCount();

    if($num>0){
        echo "<script>alert('Email already exist');
        window.location='../template/addtrainer.php';
        </script>";

    }else{
        if($password==$repassword){
            $pass=password_hash($password,PASSWORD_BCRYPT);

            $stmt2=$admin->cud("INSERT INTO `trainer`(`tr_name`,`tr_email`,`tr_phone`,`tr_age`,`tr_image`,`tr_experience`,`tr_acheiv`,`tr_password`,`tr_date`)VALUES('$name','$email','$phone','$age','$image','$experience','$achievement','$pass',now())","saved");
            echo "<script>alert('Registered Successfully');
            window.location='../template/viewtrainer.php';
            </script>";

        }else{
            echo "<script>alert('Password did not match,please try again.');
            window.location='../template/addtrainer.php';
            </script>";
        }

        }
        
    }

?>