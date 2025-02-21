<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['addevent'])){

    $event=$_POST['event'];
    $eventdate=$_POST['eventdate'];
    $starttime=$_POST['starttime'];
    $formatted_time = date("g:i A", strtotime($starttime));

    $endtime=$_POST['endtime'];
    $about=$_POST['about'];

    $target='upload/';
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);

    $status="new";
    
    $stmt=$admin->cud("INSERT INTO `events`(`event`,`ev_about`,`ev_image`,`start_time`,`end_time`,`event_status`,`ev_date`)VALUES('$event','$about','$image','$formatted_time','$endtime','$status',now())","saved");
    echo "<script>alert('Event added');
    window.location='../template/viewevents.php';
    </script>";
}
?>