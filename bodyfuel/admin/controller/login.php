<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `admin` WHERE `ad_email`='$email'");
    $num=$stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
      
        $dbpass=$row['password'];
       
       if(password_verify($password,$dbpass)){
            $_SESSION['adid']=$row['ad_id'];
            echo "<script>alert('Login Successfull ');window.location='../template/index.php';</script>";
        }else{
            echo "<script>alert('You Have Entered Worng Password');window.location='../template/login.php';</script>";
        }
    }else{
        echo "<script>alert('You are Not a Valid User');window.location='../template/login.php';</script>";
    }
   
    
}
?>