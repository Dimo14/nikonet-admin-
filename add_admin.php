<?php include('partial/header.php');?>

 <div class="main-content">
  	<div class="wrapper">
      <h1> Add Admin</h1>

      <br>
      <br>
         <?php
if (isset($_SESSION['add-admin'])) 
{
    echo $_SESSION['add-admin']; //displaying message

    unset($_SESSION['add-admin']); //removing message
}
    ?>
      <form action="" method="POST">
      	<table class="tb-30%">
      		<tr>
      			<td>
      				Full_name:
      			</td>
      			<td><input type="text" name="full_name" placeholder="enter your name"></td>
      		</tr>
      		<tr>
      			<td>
      				Username:
      			</td>
      			<td><input type="text" name="username" placeholder="enter your username"></td>
      		</tr>
            
      		<tr>
      			<td>
      				Password:
      			</td>
      			<td><input type="password" name="password" placeholder="enter your Password" id="myadminpassword"><br>
                <!-- An element to toggle between password visibility -->
              <input type="checkbox" onclick="myFunction()">Show Password</td></td>
                    <td>
                    
      		</tr>
            <td>
                    Email:
                </td>
                <td><input type="email" name="email" placeholder="enter your email"></td>
            </tr>
               <tr>
                    <td>
                   <input type="submit" name="submit" value="Add Admin" id="update">
               </td>
                    
               </tr>

      	</table>
            
      </form>
    </div>

<?php include('partial/footer.php');?>


<?php

// process the value from form and save in database

// check whether the submit is clicked or not

if (isset($_POST['submit'])) {
     // button clicked
     // echo "button clicked";


     // get data from form

     $full_name=$_POST['full_name']; 
     $username=$_POST['username'];
     $password=md5($_POST['password']);// password encryption with md5
     $email=$_POST['email'];
     // $ConfirmPassword = md5($_POST['Confirm_Password']);

// sql query to save the data into database

$sql="INSERT INTO admins SET 
full_name='$full_name',
username='$username',
password='$password',
email='$email'";
// echo "$mysqli";



// executing query and saving data into database
$res=mysqli_query($conn,$sql) or die(mysqli_error($conn)) ;

// check whether the data is inserted or not and display appropiate message

 
if($res==true){
     // data inserted
     echo "data inserted";
     // Create a ssession variable to display message
     $_SESSION['add-admin'] ="Admin Successfully Added";

     // redirect page to manage Admin

     header('LOCATION:'.SITEURL.'Admins.php');
}
else{
     // data not inserted
     // echo "data failed to be inserted";
        $_SESSION['add-admin'] ="Failed to Add Admin ";

     // redirect page to Add-Admin

     header('LOCATION:'.SITEURL.'Admins.php');
}}

?>























