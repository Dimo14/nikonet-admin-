    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>password-reset</title>
	<link rel="stylesheet" type="text/css" href="./cssfiles-back/clients.css">
</head>
<body>
	<!-- connect to database -->
	<?php include './config/const.php';?>
<?php
$message='';

if (isset($_POST['submit'])) {
	if(empty($_POST['email'])){

        $message='<div>Email Address required</div>'

	}else{

      $data = array(':email' =>trim($_POST['email']));

      $query="SELECT * FROM admins WHERE email=:email";

      $statement=$connect -> prepare($query);

      $statement-> execute($data);

      if ($statement->rowCount()>0) {
      	
      $result=$statement->futchALL();
      foreach ($result as $row) {
      	
      	if ($row["email_status"]=='Not verified') {
      		
      		$message='<div>Your email Address is not verified,so first verify your<br> email by clicking on this link<a href="resend_email_otp.php>Link</a>" </div>'
      	}else{
           $user_otp=rand(100000,999999);
           $sub_query='UPDATE admins SET user_otp=".$user_otp." WHERE
            registery_user_id='".$row["register_user_id"]."'';
            $connect->query($sub_query);
            require 'class/class.phpmailer.php';
            $mail=new PHPMailer;
            $mail->IsSMTP();
            $mail->Host='smtpout.secureserver.net';
            $mail->Post='80';
            $mail->SMPTAuth=true;
            $mail->username='tutorial@webslesson.info';
            $mail->password='password';
            $mail->SMPTSecure='';
            $mail->From='tutorial@webslesson.info';
            $mail->FomName='webslesson';
            $mail->AddAddress($row["email"]);
            $mail->IsHTML(true);
            $mail->subject='password reset for your account ';
            $message_body->body='<p>For reset your password, you have to enter this verification code when prompted:<br>'.$user_otp.'<br>.</p>
           <p>sincerely</p>';
           $mail->Body=$message_body;
           if ($mail->send()) {
           	
           		echo '<script>alert("Please check your email for password reset code")</script>';

           	echo'<script>window.location.replace("assword_reset.php?step2=1&code='.$row["user_activation_code"].'")</script>';
           
           }

      	}
      }
      }else{
      	$message='<div>Email Address not found in our records</div>'
      }
	}
}
	?>
<!-- header section starts -->
<div class="navlinks">
	<div class="nikonet_logo">
		<img src=" logo 1.png" id="logo">
	</div>
</div>
<br><br>
<br><br>
<br><br>
<hr>
<br><br>
<div class="pattern">
<p>Please enter the email address for your account. A verification code will be sent to you.<br> Once you have received the verification code, you will be able to choose a new password for your account.</p>
<br>
<!-- <?php
if (isset($_GET['step1'])) {
	// code...
?> -->
<br>
<form action="" method="POST">
	Email:
	<input type="email" name="email" placeholder="Enter your email" required="required">
	<br>
	<br>
	<br>
	<br>
	<input type="submit" name="submit" value="Send" id="log" >
</form>
</div>
<?php
}?>
<!-- footer section starts -->
 <footer>
 	<div class="under">
 		&copy;copyright 2021<b id="see"> NIKONET TELCOM </b> To report a problem, call us 24 hours,7 days a week on <b id="see">+256(0)756840320,</b> Or Email us at  <a href="bharat@kalitech.llc">bharat@kalitech.llc</a> 		
 	</div>
 </footer>
<!-- footer section ends -->
</body>
</html>