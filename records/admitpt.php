<?php
session_start();
include('../connect.php');
$a = $_POST['ward'];
echo $a;
$c= $_POST['dx'];
$d = $_POST['officer'];
$e= $_POST['ins']; 
$f = $_POST['nurse']; 
$g = $_POST['ipd'];
$h = date('Y-m-d');

$sql = "INSERT INTO admissions (ward,diagnosis,adm_officer,insurance,nursing_officer,ipno,adm_date) VALUES (:a,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h));

	header("location: admit.php?pt=$g&name=1&ward=$a");	


?>