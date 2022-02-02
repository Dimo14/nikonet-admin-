<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login to nikonet admin</title>
	<link rel="stylesheet" type="text/css" href="./cssfiles-back/clients.css">
</head>
<body>	
	<div class="come">
		<div class="navbar"><h1>Welcome to Nikonet Admin Panel</h1></div>
	
<div id="login">
	
	<h1 class="text-center">login</h1>
	<br><br>
		<?php include 'config/const.php';?>
	<?php 
     if (isset($_SESSION['login'])) {
     	echo $_SESSION['login'];
     	unset($_SESSION['login']);
     }
     if (isset($_SESSION['no-login-message']))
      {
         echo$_SESSION['no-login-message'];
         unset($_SESSION['no-login-message']);
     }

	?>
	<!-- login form starts -->
<form action="" method="POST" class="text-center">
	username:
	<input type="text" name="username" placeholder="enter username"><br><br>
	password:
	<input type="password" name="password" placeholder="enter password" id="loginid" >
	<br>
	<!-- An element to toggle between password visibility -->
      				<input type="checkbox" onclick="myFunction()">Show Password
	<br><br>

	<input type="submit" name="submit" value="login" id="log" >
</form>
<br>
<div id="pass">
<button type="text" id="pass"><a href="password_reset.php?step1=1"  id="pass">Forgot Password</a></button>
<button type="text" id="pass"><a href="username_reset.php"  id="pass">Forgot Username</a></button>
<button type="text" id="pass"><a href="register.php"  id="pass">Register</a></button>
</div>


		<!-- login form ends --><br>
		<br>

	<p class="text-center">&copy2022nikonet telcom created by <a href="www.dimo">dimo</a></p>
</div>
</div>
</body>
</html>

</div>
<script type="text/javascript" src="javascriptfiles-back/admin.js"></script>
</body>
</html>
<?php 
//CHECK whether the submit button or not
if (isset($_POST['submit'])) {
	//process for login
	//get the data from login form
	echo$username= $_POST['username'];
	echo$password=md5( $_POST['password']);
// check whether user with username and password exists or not
	$sql="SELECT * FROM admins WHERE username= '$username' AND  password= '$password'";
// execute the query
	$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	// count rows to check if the user exists
	$count=mysqli_num_rows($res);

	if ($count==1) {
		// user available.login successful
	$_SESSION['login']="<div>Login Successful</div>";
	$_SESSION['user']='$username';//to check whether the user is logged in or not and logout will unset it
	// redirect to homepage
	header('LOCATION:'.SITEURL.'home_page.php');
	}else{
			// user  not available.login failed
	$_SESSION['login']="<div>login Failed</div>";
	// redirect to homepage
	header ('LOCATION:'.SITEURL.'login.php');
	}



}


?>
