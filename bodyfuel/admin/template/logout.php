<?php 
include '../config.php';
$admin=new Admin();


session_destroy();

header('Location:../template/login.php');
?>