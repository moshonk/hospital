<?php
session_start(); 
include('../connect.php');
$quantities=explode(',',$_GET['qty']);
$dispense_ids=explode(',', $_GET['dispense_id']);
$order_id=$_GET['order_id'];
echo $dispense_ids;
foreach (array_combine($quantities, $dispense_ids) as $quantity => $dispense_id){ 
    ?>
    <p><?php
$sql = "UPDATE lab_orders
        SET  qty_disp=$quantity
        WHERE drug_id=$dispense_id";
        $q = $db->prepare($sql);
        $q->execute();

 ?>

</p>
<?php
$posted_by=$_SESSION['SESS_FIRST_NAME'];
$reset=1;
$date=date('Y-m-d H:i:s');
$sql = "UPDATE lab_orders
        SET  cashed_by=?,
        updated_at=?,
        dispensed=?
        WHERE patient=?";
        $q = $db->prepare($sql);
        $q->execute(array($posted_by,$date,$reset,$order_id));
        header("location: index.php");

 ?>
<?php } ?>
    