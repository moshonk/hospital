<?php
session_start();

include('../connect.php');
$a=$_GET['id'];
$sql = "DELETE FROM `drugs` WHERE `drug_id`= $a";
$q = $db->prepare($sql);
$q->execute();
	header("location: stocks.php");

?>