<?php include('partial/header.php');?>


<div class="main-content">
  	<div class="wrapper">
      <h1>  Update client</h1>

      <br>
      <br>

   
    <?php
//get tthe id of clients to be updated

$id=$_GET['id'];

// craete sql query to update clients

$sql="SELECT * FROM clients WHERE id='$id'";

// execute the query

$res=mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
	// check whether the data is available or not 
$counts = mysqli_num_rows($res);//function to count all rows in database

//check whether we have clients or not

if ($counts==1) {
	// get the clients details
	echo "client avaiable";
	$rows=mysqli_fetch_assoc($res);
	$full_name = $rows['full_name']; 
     $phone_number = $rows['phone_number'];
     $email = $rows['email'];
     $packages = $rows['packages'];

}
else{
//redirect to clients page
header('LOCATION:'.SITEURL.'clients.php');
// echo "error";
}
}
    ?>
      <form action="" method="POST">
      	<table class="tb-30%">
      		<tr>
      			<td>
      				Full_name:
      			</td>
      			<td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
      		</tr>
      		<tr>
      			<td>
      				phone_number:
      			</td>
      			<td><input type="numbers" name="phone_number" value="<?php echo $phone_number; ?>"></td>
      		</tr>
      		<tr>
      			<td>
      				email(optional):
      			</td>
      			<td><input type="email" name="email" value="<?php echo $email; ?>"></td>
                    <td>
                    
      		</tr>
               <tr>
                    <td>
                      packages:
                    </td>
                    <td><input type="text" name="packages" value="<?php echo $packages; ?>"></td>
                    <td>
                    
               </tr>
      	</table>
        <br>
        <br>
              <input type="hidden"name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update client" class="btn-primary">
      </form>
    </div>

<?php

//check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
	// 
	// echo "button clicked";
	//get all the data  from the form
  
    $id = $_POST['id'];
	  $full_name = $_POST['full_name']; 
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $packages = $_POST['packages'];

// craete sql query to update client

$sql="UPDATE clients SET
full_name='$full_name',
phone_number='$phone_number',
email='$email',
packages='$packages'
 WHERE id='$id'";

//execute the query

$res=mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
	// query excuted sucessfully 

// echo "client updated";
$_SESSION['update']='<div id="success">client updated sucessfully. </div>';

//redirect to client page

header('LOCATION:'.SITEURL.'clients.php');}
else{
	// query failed to update client

	// echo "Failed to update client";

	$_SESSION['update']="<div id= 'error'>Failed to update client.<br>
  Try again later.</div>";

//redirect to client page

header('LOCATION:'.SITEURL.'clients.php');
}}
 ?>
<?php include('partial/footer.php');?>


