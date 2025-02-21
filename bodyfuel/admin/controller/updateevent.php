<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['updateevent'])){

    $event=$_POST['event'];
    $evid=$_POST['evid'];
    $eventdate=$_POST['eventdate'];
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];
    $about=$_POST['about'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $stmt=$admin->cud("UPDATE `events` SET `event`='$event',`ev_about`='$about',`ev_image`='$image',`start_time`='$starttime',`end_time`='$endtime',`ev_date`=now() WHERE `ev_id`='$evid'","saved");
    echo "<script>alert('Event Updated');
    window.location='../template/viewevents.php';
    </script>";
}
?>