<?php
session_start();
if(empty($_SESSION['user']['somaiya_id'])){
	header("Location:login.php");
}
?>
<html>

<head>
	<title>MySomaiya Account</title>
	<link rel="stylesheet" media="screen and (max-width:1024px)" type="text/css" href="css/mobilestyle.css">
	<link rel="stylesheet" media="screen and (min-width:1025px)" type="text/css" href="css/style.css">
	
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<script src="js/inewsticker.js"></script>
		<script type="text/javascript">
		$('marquee').marquee(optionalClass);
		</script>
		<script type="text/javascript">
    $(document).ready(function(){
        $('a[rel^="prettyPhoto"]').prettyPhoto({
           
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#name').inewsticker({
		speed       : 2500,
		effect      : 'slide',
		dir         : 'ltr',
		font_size   : 13,
		color       : '#fff',
		font_family : 'arial',
		delay_after : 0		
	});
});
     </script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
</head>
<body>

	<header>
		<br>
		<center><div><?php echo "<img src='upload/".$_SESSION['user']['image']."' class='profile'>"?></div></center>
		
		<h1>Welcome <?php echo  strtoupper($_SESSION['user']['name']);?></h1>
		<h3>This is <e>Mysomaiya</e> a place for anything and everything related to KJSIEIT.</h3>
	</header>
	<div class="content">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="settings.php" class="current">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<br><br><br>
		
	<br>
	<div class="mid_content">
		<?php

		?>
	<h2>Update Your Settings</h2>
	<form action="" method="post">
	<?php
	require_once("connection.php");
	$id=$_SESSION['user']['somaiya_id'];
	$password=$_SESSION['user']['password'];
	echo "$password";
	?>
	Password:<input type="text" name="mobile" value="<?php echo "$password" ?>"/>
	<br><br>
	Profile Picture:<input type="file" name="image">
	<br><br>
	Birthday:<input type="date" name="bday">
	<br><br>
	<input type="submit" value="UPDATE" name="submit">
    </form>
		</div>
		<div class="footer">
			<h2>Created By: <a href="https://www.facebook.com/ud.thewon?ref=tn_tnmn" target="_blank">UTKARSH DHAWAN</a> & <a href="https://www.facebook.com/Harshzz?fref=ts" target="_blank">HARSH DAFTARY</a> &nbsp;&nbsp;Photo Credits: <a href="https://www.facebook.com/yash.ed22?fref=ts" target="_blank">YASH MISTRY</a></h2>
			<h4 align="right"><a href="terms.docx">Terms of Service</a> | <a href="privacy.docx">Privacy Policy</a></h4>
		</div>
		</div>
</body>
</html>