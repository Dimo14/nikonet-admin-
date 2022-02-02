
<?php include('partial/header.php');
 
?>

<br>
<br>
  <div class="main-content">
  	<div class="wrapper">
      <h1> Change Password</h1>
    </div>
    <br><br>
           <?php
if (isset($_SESSION['change-pwd'])) 
{
    echo $_SESSION['change-pwd']; //displaying message

    unset($_SESSION['change-pwd']); //removing message
}
if (isset($_SESSION['user-not-found'])) {
    echo $_SESSION['user-not-found']; 
    unset($_SESSION['user-not-found']);
}
if (isset($_SESSION['pwd-not-match'])) {
    echo $_SESSION['pwd-not-match']; 
    unset($_SESSION['pwd-not-match']);
}
if (isset($_SESSION['change-pwd'])) {
    echo $_SESSION['change-pwd']; //displaying  admin deleted
    unset($_SESSION['change-pwd']); //removing delete admin

}
    ?>
<?php

//get tthe id of admin to be changed

if (isset($_GET['id'])) {
	$id =$_GET['id'];

}

?>

 <form action="" method="POST">
      	<table class="tb-30%">
      		<tr>
      			<td>
      				Current password:
      			</td>
      			<td><input type="password" name="current_password"id="myInput1" placeholder="enter your current_password"><br>
      				<!-- An element to toggle between password visibility -->
      				<input type="checkbox" onclick="myFunction()">Show Password</td>
      			
      		</tr>
      		<tr>
      			<td>
      				New password:
      			</td>
      			<td><input type="password" name="new_password" id="myInput2" placeholder="enter your New_password"><br>
      				<!-- An element to toggle between password visibility -->
      				<input type="checkbox" onclick="myFunction()">Show Password
      			</td>
      			
      		</tr>   			
               <tr>
                    <td>
                      Confirm Password:
                    </td>
                    <td><input type="password" name="confirm_password"id="myInput3"placeholder="Confirm your Password"><br>
                    <!-- An element to toggle between password visibility -->
              <input type="checkbox" onclick="myFunction()">Show Password</td>
               </tr>
      	</table>

      	<br>
      	<br>
      	    <input type="hidden"name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Change_Password" class="btn-primary">
      </form>
</div>

<?php

//check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
	// 
	// echo "button clicked";
	//get all the data  from the form
  
    $id=$_POST['id'];
	 	$current_password = md5($_POST['current_password']); 
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

//check whether the user with id and password exists or not

$sql="SELECT * FROM admins WHERE id='$id' AND password= '$current_password'";

//execute the query

$res=mysqli_query($conn,$sql);

//check whether the query is executed sucessfully or not

if ($res==true) {
	// query excuted sucessfully 
$counts=mysqli_num_rows($res);//function to count all rows in database
if ($counts==1) {
//user exists and password can be changed
	 // echo "user found";
	if ($new_password==$confirm_password) {
		// update password

		$sql2="UPDATE admins SET
		 password='$new_password'
		   WHERE id='$id'";
		   //execute the query
		   $res2=mysqli_query($conn,$sql2) ;
		   if ($res2==true) {
		   	// display success message
                 $_SESSION['change-pwd']='<div class="success">Password Successfully Changed.</div>';

                  //redirect to manage admin page
                  header('LOCATION:'.SITEURL.'Admins.php');

		   }else{
		   	// display error message
		   	  $_SESSION['change-pwd']="<div class='error'>Failed to Change Password.</div>";

                  //redirect to manage admin page
                  header('LOCATION:'.SITEURL.'Admins.php');

		   }


	}else{
			$_SESSION['pwd-not-match']="<div class='error'>Password Did Not Match.<br>Try again later.</div>";

//redirect to manage admin page

header('LOCATION:'.SITEURL.'Admins.php');
}
	}
} 
else{
	// user not found
	$_SESSION['user-not-found']="<div class='error'>User not Found.<br>Try again later.</div>";

//redirect to manage admin page

header('LOCATION:'.SITEURL.'Admins.php');
}

}




?>
<br>
<br>
<br>


<?php include('partial/footer.php');?>


