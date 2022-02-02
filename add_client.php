<?php include('partial/header.php');?>

 <div class="main-content">
  	<div class="wrapper">
      <h1 > Add client</h1>

      <br>
      <br>
      <?php if (isset($_SESSION['add-client'])) 
{
    echo $_SESSION['add-client']; //displaying message

    unset($_SESSION['add-client']); //removing message
}?>
<br>
<br>

      <form action="" method="POST">
      	<table class="tb-30%">
      		<tr>
      			<td>
      				full_name:
      			</td>
      			<td><input type="text" name="full_name" placeholder="enter your name"></td>
      		</tr>
      		<tr>
      			<td>
      				phone_number:
      			</td>
      			<td><input type="numbers" name="phone_number" placeholder="enter your phone_number"></td>
      		</tr>
      		<tr>
      			<td>
      				email(option):
      			</td>
      			<td><input type="email" name="email" placeholder="enter your emails"></td>
                    <td>
                    
      		</tr><br>
               <tr>
                    <td></td>
                    <td>
                          <h4>PACKAGES</h4>
          <br>
          <!-- <div class="select"> -->
     <select id="select" name="packages">
          <option><h4>PACKAGES</h4></option>
               <option value=" a day <br><?php
                date_default_timezone_set('Africa/kampala');
                $d=strtotime("+1 day");
             echo "Paid on:".date('y-m-d h:i:s')."<br>";
             echo"Expiries on:".date('y-m-d h:i:s',$d)."\n";
                ?>"><h5>1 DAY 1,000/=</h5></option>
                    <option value=" a week <br><?php
                     date_default_timezone_set('Africa/kampala');
                      $d=strtotime("+1week");
             echo "Paid on:".date('y-m-d h:i:s')."<br>";
             echo"Expiries on:".date('y-m-d h:i:s',$d)."\n";?>"><h5>1 WEEK 6,000/=</h5></option>
                    <option value=" a month <br> <?php 
                 date_default_timezone_set('Africa/kampala');
               $d=strtotime("+1month");
             echo "Paid on:".date('y-m-d h:i:s')."<br>";
             echo"Expiries on:".date('y-m-d h:i:s',$d)."\n";?>"><h5>1 MONTH 20,000/=</h5></option>
     </select> 
               </tr>
      	</table>
            <input type="submit" name="submit" value="Add client" id="update">
      </form>
    </div>
 <?php include 'partial/footer.php';?>


<?php

// process the value from form and save in database

// check whether the submit is clicked or not

if (isset($_POST['submit'])) {
     // button clicked
     // echo "button clicked";


     // get data from form

     $full_name = $_POST['full_name']; 
     $phone_number = $_POST['phone_number'];
     $email = $_POST['email'];
     $packages = $_POST['packages'];

// sql query to save the data into database

$sql="INSERT INTO clients SET 
full_name= '$full_name',
phone_number= '$phone_number',
email= '$email',
packages= '$packages'";
// echo "$mysqli";

}

// executing query and saving data into database
$res= mysqli_query($conn,$sql) or  die (mysqli_error($conn));

// check whether the data is inserted or not and display appropiate message

 
if($res==true){
     // data inserted
     // echo "data inserted";
     // Create a ssession variable to display message
     $_SESSION['Add-client'] ="Client Successfully Added";

     // redirect page to manage Admin

     header('LOCATION:'.SITEURL.'clients.php');
}
else{
     // data not inserted
     // echo "data failed to be inserted";
        $_SESSION['Add-client'] ="Failed to Add Client ";

     // redirect page to Add-Admin

     header('LOCATION:'.SITEURL.'clients.php');
}

?>
   





















