<html>
<head>
	<title></title>
	<style type="text/css">
	table{margin: 0 auto;padding: 30px 60px;border:10px solid #999;background: #CCC}
	</style>
	
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
		if(!empty($name) and !empty($email)){
			if($password==$c_password){
				require_once("connection.php");
				$encrypt_password=sha1('$password');
				$query=mysqli_query($conn,"INSERT into members(somaiya_id,name,email,mobile,address,password) VALUES('$sid','$name','$email','$mobile','$address','$encrypt_password')");
				if($query){
					echo "You have been registered";
				}else{
					echo "Error signing you up, please try again later";
				}
			}else{
				echo "Passwords do not match";
			}
		}else{
			echo "Please fill in all the fields";
		}
	}
	?>
	<form method="post">
		<table>
			<tr>
				<td>Somaiya Id :</td>
				<td><input type="number" name="sid" value="<?php echo (empty($sid))?"":$sid ?>"></td>
			</tr>
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name" value="<?php echo (empty($name))?"":$name?>"/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" value="<?php echo (empty($email))?"":$email?>"/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="text" name="mobile" value="<?php echo (empty($mobile))?"":$mobile?>"/></td>
			</tr>
			<tr>
				<td>Address : </td>
				<td><textarea name="address" style="width:300px;height:60px;"><?php echo (empty($address))?"":$address;?></textarea></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>Confirm Password : </td>
				<td><input type="password" name="c_password"/></td>
			</tr>
			<tr>
				<td><a href="admin.php">< < Go back</a></td>
				<td><input type="submit" name="submit" value="Register Me"/></td>
			</tr>
		</table>
	</form>
</body>
</html>