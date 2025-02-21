<?php
include 'config.php';
$admin=new Admin();
$eqpid=$_GET['eqpid'];


?>
<?php
$stmt=$admin->ret("SELECT * FROM `equipment` WHERE `eqp_id`='$eqpid'");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['eqp_name'] ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>
<?php } ?>