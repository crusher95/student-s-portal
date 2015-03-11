<html>
<head>
	<title>Edit Accounts</title>
	<style type="text/css">
	table{margin: 0 auto;padding: 30px 60px;border:10px solid #999;background: #CCC}
	
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
	</style>
</head>
<body>
	<?php  
	$id=$_GET['record_id'];
	require_once "connection.php";
	$select=mysqli_query($conn,"SELECT * from members WHERE somaiya_id=$id");
	$fetch=mysqli_fetch_assoc($select);
	?>

	<?php
	if(isset($_POST['submit'])){
		$id=$_POST['hidden_id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		if(!empty($name) and !empty($email)){
				require_once("connection.php");
				$query=mysqli_query($conn,"UPDATE members SET name='$name',email='$email',mobile='$mobile',address='$address' WHERE somaiya_id=$id");
				if($query){
					header("Location:admin.php");
				}else{
					echo "Error";
					die();
				}
		}else{
			echo "Please fill in all the fields";
		}
	}
	?>
	<form method="post">
		<input type="hidden" name="hidden_id" value="<?php echo $id?>">
		<table>
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name" value="<?php echo (empty($fetch['name']))?"":$fetch['name']?>"/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" value="<?php echo (empty($fetch['email']))?"":$fetch['email']?>"/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="text" name="mobile" value="<?php echo (empty($fetch['mobile']))?"":$fetch['mobile']?>"/></td>
			</tr>
			<tr>
				<td>Address : </td>
				<td><textarea name="address" style="width:300px;height:60px;"><?php echo (empty($fetch['address']))?"":$fetch['address'];?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"/></td>
			</tr>
		</table>
	</form>
</body>
</html>