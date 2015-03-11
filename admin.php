<html>
<head>
	<title>Manage Students-MySomaiya</title>
	<style type="text/css">
	body{
		background: url('img/new.jpg');
	}
	table{width:1000px;border-collapse: collapse;margin: 0 auto;padding: 30px 60px;border:10px solid #999;background: #CCC}
	table tr td{padding: 5px 10px;}
	</style>

	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body>
	<?php
	require_once('connection.php');
	$query=mysqli_query($conn,"SELECT * from members");

	if(!empty($_POST['delete_selected'])){
		$records=$_POST['record'];
		foreach($records as $record){
			$deleted=0;
			mysqli_query($conn,"DELETE from members WHERE id=$record");
			$deleted=1;
		}
		if($deleted==1){
			echo "Total ".count($records)." records deleted";
			header("Location:select.php");
		}else{
			echo "Error";
		}
	}
	?>
	<form action="" method="get">
		<table border="1">
			<tr>
				<td colspan="6">
					<a href="insert.php">Add a new Record</a>	
				</td>
				<td>
					<a href="logout.php">Logout</a>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<input type="submit" value="Delete Selected" name="delete_selected">
				</td>
			</tr>
			<tr>
				<th>Somaiya ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
				<th colspan="2">Actions</th>
			</tr>
			<?php
			while($fetch=mysqli_fetch_assoc($query)){
				?>
				<tr>
					<td><input type="checkbox" name="record[]" value="<?php echo $fetch['somaiya_id']?>"><?php echo $fetch['somaiya_id']?></td>
						<td><?php echo $fetch['name']?></td>
					<td><?php echo $fetch['email']?></td>
					<td><?php echo $fetch['mobile']?></td>
					<td><?php echo $fetch['address']?></td>
					<td><a href="edit.php?record_id=<?php echo $fetch['somaiya_id']?>">Edit</a></td>
					<td><a onclick="return confirm('Do you want to delete this record?');" href="delete.php?record_id=<?php echo $fetch['somaiya_id']?>">Delete</a></td>
				</tr>
				<?php
			}
			?>
		</table>
	</form>
</body>
</html>