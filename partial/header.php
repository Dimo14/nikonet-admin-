<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="./cssfiles-back/clients.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'config/const.php';?>
<?php 
     if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
     }
     
    ?>
    <br>
    <br>
    <?php

	// authorization access control
	// check whether the user is logged in or not
	if (!isset($_SESSION['user'])) //if session is not set
	{
		// user not logged in 

		//redirect to login page with message
		$_SESSION['no-login-message']="<div>Please login to Access Admin Panel</div>";
		//redirect to login page
		header ('LOCATION:' .SITEURL. 'login.php');
	}
	?> 
<!-- header section starts -->
<div class="alcohol">
	<div class="logo_1">
		<img src=" logo 1.png" id="logo">
	</div>
	<div class="nav">
		<nav>
			<ul>
				<li>
				    <a href="home_page.php">Home Page</a>
			        <a href="clients.php">Clients</a>
			        <a href="message.php">Messages</a>
			         <a href="Admins.php">Admins</a>
                     <a href="logout.php">Logout</a>

				</li>
			</ul>
			
		</nav>
	</div>
</div>
<div class="navbar">
	<h1> Welcome to Nikonet Admin Panel </h1>
	
</div>
<!-- header section ends -->
<hr>