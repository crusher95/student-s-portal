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
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<br><br><br>
				<div class="sidebar_right">
	<h2>Notice Board</h2>
	<ul id="name">
		<?php require_once("notice_contents.php");?>
	</ul>
	<h3><a href="notices.php">See all</a></h3>
	</div>
				<div class="sidebar_left">
	<h2>TimeTable</h2>
	<center>
<?php
	if($_SESSION['user']['year']==1)
	{
		$year_word='fe_';
	}elseif ($_SESSION['user']['year']==2) {
		$year_word='se_';
	}elseif ($_SESSION['user']['year']==3)
	{
		$year_word='te_';
	}
	else{
		$year_word='be_';
	}
	$division=strtolower($_SESSION['user']['division']);
	$timetable="$year_word$division.jpg";
	?>
	<?php echo '<a href="img/timetable/' . $timetable. '" rel="prettyPhoto" title="TimeTable of FE Division C">'?>
    <?php echo '<img src="img/timetable/' . $timetable. '" alt="Time Table" width="200" height="200" />' ?></a>  </center>
    <br>
    <h2>Attendance</h2>
    <center><a href="attendance.php">Click Here to view Attendance</a></center>
    <br>
</div>
	<br>
<?php
require_once("assignments.php");
?>

	<br>
		<div class="footer">
			<h2>Created By: <a href="https://www.facebook.com/ud.thewon?ref=tn_tnmn" target="_blank">UTKARSH DHAWAN</a> & <a href="https://www.facebook.com/Harshzz?fref=ts" target="_blank">HARSH DAFTARY</a> &nbsp;&nbsp;Photo Credits: <a href="https://www.facebook.com/yash.ed22?fref=ts" target="_blank">YASH MISTRY</a></h2>
			<h4 align="right"><a href="terms.docx">Terms of Service</a> | <a href="privacy.docx">Privacy Policy</a></h4>
		</div>
		</div>
</body>
</html>