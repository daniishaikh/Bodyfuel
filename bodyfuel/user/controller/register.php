<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['register'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    
 
   

    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $stmt=$admin->ret("SELECT * FROM `user` WHERE `user_email`='$email'");
    $num=$stmt->rowCount();
    if($age<16)
    {
        echo "<script>alert('You are not eligible');
        window.location='../register.php';
        </script>";
    }
    if($num>0){
        echo "<script>alert('Email already exist');
        window.location='../register.php';
        </script>";

    }else{
        if($password==$repassword){
            $pass=password_hash($password,PASSWORD_BCRYPT);

            $stmt2=$admin->cud("INSERT INTO `user`(`user_name`,`user_email`,`user_phone`,`user_age`,`user_password`,`user_date`)VALUES('$name','$email','$phone','$age','$pass',now())","saved");
            if($stmt2){
            echo "<script>alert('Registered Successfully');
            window.location='../signin.php';
            </script>";
            } else {
                echo "<script>alert('Something went wrong!!,please try again.');
                window.location='../register.php';
                </script>";
            }
        }else{
            echo "<script>alert('Password did not match,please try again.');
            window.location='../register.php';
            </script>";
        }

        }
        
    }

?>