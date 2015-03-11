<?php
session_start();
if (!empty($_SESSION['user']['somaiya_id'])) {
   header("Location:index.php");
}
?>
<html>
<head>
	<title>MYSOMAIYA</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>
<body lang="en">

	<header>
		<img src="img/logo.png" id="logo">
		<a href="collegecomrade.php"><img src="img/collegecomrade.png" id="logo"></a>
	</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div id="login-form">

        <h3>Login</h3>

        <fieldset>

            <form action="" method="post">
                <?php
                require_once("connection.php");
                if (isset($_POST['submit'])) {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $encrypt_password=sha1($password);
                $query=mysqli_query($conn,"SELECT * from members where email='$email' and password='$encrypt_password'");
                $count=mysqli_num_rows($query);
                if($count==1){
                    $fetch=mysqli_fetch_assoc($query);
                    unset($fetch['password']);
                    $_SESSION['user']=$fetch;
                    header("Location:index.php");
                }
                else{
                    echo "<p style='color:red'>Sorry Wrong Password or Email!!</p>";
                }
                
               }
                ?>
                <input name="email" type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' ">
                <input name="password" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' ">
                <input type="checkbox" value="Remember Me">
                <input type="submit" value="Login" name="submit">

                <footer class="clearfix">

                    <p><span class="info">?</span><a href="forgot.php">Forgot Password</a></p>
                    <p><span class="info">!</span><a href="register.php">New Here? SIGN UP</a></p>
                    <p><span class="info">&bull;</span><a href="som-admin.php"</a>Admin Login</p>
                </footer>

            </form>

        </fieldset>

    </div>
  <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>


</body>
</html>