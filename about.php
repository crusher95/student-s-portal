<?php
session_start();
if (empty($_SESSION['user']['somaiya_id'])) {
	header('Location:login.php');
}
?>
<html>
<head>
	<title>MySomaiya Account</title>
	<link rel="stylesheet" media="screen and (max-width:1024px)" type="text/css" href="css/mobilestyle.css">
	<link rel="stylesheet" media="screen and (min-width:1025px)" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mid_content.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript">
    $(document).ready(function(){
        $('a[rel^="prettyPhoto"]').prettyPhoto({
           
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
				<li><a href="about.php" class="current">About</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<br>
<br><br>
<center><div class="slideshow" id="hidden"><img src="img/slide_1.jpg"><img src="img/slide_8.jpg"><img src="img/slide_3.jpg"><img src="img/slide_4.jpg"><img src="img/slide_5.jpg"><img src="img/slide_6.jpg"><img src="img/slide_7.jpg"></div></center>
	<br>
	<center><h1 class="abouth1">ABOUT KJSIEIT</h1><br><p class="about"><br><br>The K J Somaiya Institute of Engineering and Information Technology (KJSIEIT), was established by the Somaiya Trust in the year 2001, at Ayurvihar campus, Sion. The institute was set up primarily in response to the need for imparting quality education in the modern field of Information Technology and allied branches of engineering and technology, a big leap to develop ourselves into a prosperous nation of the 21 century.
The institute aims to provide the necessary dynamism in the light of expanding knowledge and changing socio-economic requirements of the modern society. From its inception, the institute has been striving to develop itself into an institution of quality and excellence in the field of technical education, in consonance with the contemporary and future needs of our society in concurrence with a fine blend of traditional values and modern education.
	<br><br>
	KJSIEIT is located on the eastern express highway at Ayurvihar, Sion, surrounded by industries and business establishments in the heart of metropolitan city, Mumbai. The institute extends over a sprawling 85 acres of which 5 acres have been ear-marked for this Institute with an easy access to railway stations namely Sion and Chunabhatti to a distance of 1 km. as well as connected to Everard Nagar bus stop. The domestic and international airports are at a distance of 15 kms from the institute.
	<br><br>
	<img src="img/principal.jpg">
	<br><br>
	<t>From Principal's Desk</t>
	<br>
	<br>
	The role of shaping the modern world that is being played by the engineers is hardly questioned.<br>Hence ultimate aim of any distinguished technical education institute should be to promote a multifaceted development of the students. 
K. J. Somaiya Institute of Engineering and Information Technology (KJSIEIT) provide quality education to engineering students.We motivate, facilitate and guide our students by providing lifelong learning opportunities in a conducive learning environment.
With our commitment to education, we continue to provide structured and systematic delivery of academic programmes with the help of our dedicated management, faculty and administrative staff in a conducive learning environment. Institute encourages research activities for students and teachers through SRDC (Somaiya Research and Development Centre) and University research projects.                        
<br><br> We have a capacity for 1200 students with 80 full-time teaching staff (Teacher Student Ratio is 1:15).You can be assured of constant attention from our dedicated teaching and academic staff.  You will also enjoy our various facilities made available to you on campus.  We provide necessary Student Support Services to ensure that students' needs and concerns are looked into so that they are able to achieve their goals of learning at KJSIEIT.
We very much look forward to welcoming you as our students in your expedition for lifelong learning.
 <br><br><br><b>
Dr. Dilip R. Pangavhane
</b><br>

<b>Principal</b>
<br><br>
</p></center>
		<div class="footer">
			<h2>Created By: <a href="https://www.facebook.com/ud.thewon?ref=tn_tnmn" target="_blank">UTKARSH DHAWAN</a> & <a href="https://www.facebook.com/Harshzz?fref=ts" target="_blank">HARSH DAFTARY</a> &nbsp;&nbsp;Photo Credits: <a href="https://www.facebook.com/yash.ed22?fref=ts" target="_blank">YASH MISTRY</a></h2>
			<h4 align="right"><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a></h4>
		</div>
		</div>
</body>
</html>