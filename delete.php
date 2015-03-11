<?php  
require_once('connection.php');
$id=$_GET['record_id'];
$query=mysqli_query($conn,"DELETE from members WHERE somaiya_id=$id");
if($query){
	header("Location:admin.php");
}else{
	echo "Error";
	die();
}
?>