<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['payment'])){
    $transaction=$_POST['transaction'];
    $memid=$_POST['memid'];
    $today = date("Y-m-d"); // Get today's date
    $oneMonthLater = date("Y-m-d", strtotime("+1 month", strtotime($today)));
    $threeMonthLater = date("Y-m-d", strtotime("+3 month", strtotime($today)));
    $status="member";

    if($memid==6){
                    $stmt=$admin->Rcud("INSERT INTO `membership_order`(`user_id`,`mem_id`,`memorder_status`,`memorder_date`,`mend_date`)VALUES('$uid','$memid','pending','$today','$oneMonthLater')");

                    $stmt1=$admin->ret("SELECT * FROM `membership` WHERE `mem_id`='$memid'");
    }
    if($memid==5){
                    $stmt=$admin->Rcud("INSERT INTO `membership_order`(`user_id`,`mem_id`,`memorder_status`,`memorder_date`,`mend_date`)VALUES('$uid','$memid','pending','$today','$threeMonthLater')");

                    $stmt1=$admin->ret("SELECT * FROM `membership` WHERE `mem_id`='$memid'");
    }
   while( $row=$stmt1->fetch(PDO::FETCH_ASSOC)){

    $amt=$row['amount'];

    $stmt2=$admin->cud("INSERT INTO `payment`(`morder_id`,`amount`,`Transaction_no`,`pay_date`)VALUES('$stmt','$amt','$transaction',now())","saved");

    echo "<script>window.location='../status.php';</script>";
   }
}
?>