<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `user` WHERE `user_email`='$email'");
    
    $num=$stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // $status=$row['status'];
        $dbpass=$row['user_password'];
       
       if(password_verify($password,$dbpass)){
            $_SESSION['uid']=$row['user_id'];
            echo "<script>alert('Login Successfull ');window.location='../index.php';</script>";
        }else{
            echo "<script>alert('You Have Entered Worng Password');window.location='../signin.php';</script>";
        }
    }else{
        echo "<script>alert('You are Not a Valid User');window.location='../signin.php';</script>";
    }
    // }elseif($status=='panding'){
    //         echo "<script>alert('You are not Approved');</script>";
    //                 }
    
}
?>