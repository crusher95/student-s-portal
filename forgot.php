<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body>
	<div class="mid_content">

		<h2>Forgot Password</h2>
		<center>
	<form action="" method="post">

	<?php
	if (isset($_POST['submit'])) {
		require_once('connection.php');
		$email=$_POST['email'];
		$query=mysqli_query($conn,"SELECT * from members where email='$email'");
		$count=mysqli_num_rows($query);
		if ($count==1) {
		$fetch=mysqli_fetch_assoc($query);
		$password=$fetch['password'];
		$subject="Forgot Password";
		$body="Forgot the password? Here it is: $";
	}
	}
	?>
		Enter Registered Email:<input type="text" name="email">
		<br><br>
		<a href="login.php" style="text-decoration:none;">< < Go back</a>
		<input type="submit" name="submit">
		</center>
	</form>
	</div>
</body>
</html>
