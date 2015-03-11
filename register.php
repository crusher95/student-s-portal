<?php
session_start();
if(!empty($_SESSION['user']['somaiya_id']))
header("Location:index.php");
?>
<html>
<head>
	<title>MYSOMAIYA Register</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body lang="en">

	<header>
		<img src="img/logo.png" id="logo">
		<a href="collegecomrade.php"><img src="img/collegecomrade.png" id="logo"></a>
	</header>

<div class="content">
	<center>
		<fieldset>
		<form action="" method="post" class="form" enctype="multipart/form-data">
	
		<h3>REGISTERATION FORM</h3>
		<br>
		Fill In The Following Details<br>
		<br>
		<?php
					
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$sid=$_POST['sid'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$year=$_POST['year'];
		$bday=$_POST['bday'];
		$division=$_POST['division'];
		$password=time();
		$encrypt_password=sha1($password);
        $path="upload/";
		$path=$path.rand().time().basename($_FILES['image']['name']);
		$image=rand().time().$_FILES['image']['name'];
		if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
			echo "<p style='color:'green''>Success</p>";
		}
		else{
			echo "<p style='color:'red''>Unsuccessfull</p>";
		}
	
	
		$subject="Password Information Regarding MYSOMAIYA";
		$body="Your Temporary Password is $password. You are advised to change it as soon as you login.";
require_once("connection.php");
if (!empty($name) and !empty($sid) and !empty($email) and !empty($mobile) and !empty($address) and !empty($year) and !empty($bday) and !empty($division) and !empty($image)) {
	if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
	$query=mysqli_query($conn,"INSERT INTO `members`(`somaiya_id`, `name`, `email`, `mobile`, `address`, `password`, `dob`, `year`, `division`, `image`) VALUES ('$sid','$name','$email','$mobile','$address','$encrypt_password','$bday','$year','$division','$image')");
if ($query) {
	mail($email, $subject, $body);
		echo "<p style='color:green'>You Have Been Registered Successfully! Check your Email for password</p><br>";
	
}else{
	echo "<p style='color:red;'>Error :- Please Try Again "."<br></p>";
}
	}else{
		echo "<p style='color:red;'>Enter Email in proper format</p>";
	}
}else{
	echo "<p style='color:red;'>Fill in all the fields</p>";
}
}
	?>

		Name: <input type="text" name="name" value="<?php echo (empty($name))?"":$name?>">
		<br>
		Somaiya Id: <input type="text" name="sid" value="<?php echo (empty($sid))?"":$sid?>">
		<br>
		Email-id: <input type="text" name="email" value="<?php echo (empty($email))?"":$email?>" >
		<br>
		Mobile: <input type="text" name="mobile" value="<?php echo (empty($mobile))?"":$mobile?>">
		<br>
        Birthday: <input type="date" name="bday" value="<?php echo (empty($bday))?"":$bday?>">
        <br>
		Address: <br><textarea style="width:200px;height:60px;" name="address"><?php echo (empty($address))?"":$address;?></textarea>
		<br>
		Year: <select name="year" value="<?php echo (empty($year))?"":$year?>">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
		<br>
Division: <select name="division" value="<?php echo (empty($division))?"":$division?>">
  <option value="EXTC-A">EXTC-A</option>
  <option value="EXTC-B">EXTC-B</option>
  <option value="Comps">Comps</option>
  <option value="IT">IT</option>
  <option value="Electronics">Electronics</option>
</select>
<br>

		File Upload:<input type="file" name="image">
<br>

	<img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="./securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
    <object type="application/x-shockwave-flash" data="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" height="32" width="32">
    <param name="movie" value="./securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.png&amp;audio_file=./securimage_play.php" />
    </object>
    &nbsp;
    <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="./images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />
    <strong>Enter Code*:</strong><br />
    <input type="text" name="ct_captcha" size="12" maxlength="16" />
  </p>
  

		<input type="submit" value="Register" name="submit">
		<br>
		<br>
		<a href="forgot.php">Forgot Password</a>&nbsp;&nbsp;<a href="login.php">Already Have ID?</a>
		<br>
		</form>
	</fieldset>

	</center>

</div>
</body>
</html>