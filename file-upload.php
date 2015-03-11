<html>
<head>
	<title>Image Uploader</title>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		$path="upload/";
		$path=$path.rand()."-".time()."-".basename($_FILES['image']['name']);
		if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
			echo "Success";
		}
		else{
			echo "Unsuccessfull";
		}
	}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		File Upload:<input type="file" name="image">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>