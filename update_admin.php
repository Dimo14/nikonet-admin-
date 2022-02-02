

<?php include('./partial/header.php');?>


<div class="main-content">
    <div class="wrapper">
      <h1> Update Admin</h1>

      <br>
      <br>

   
    <?php
//get tthe id of admin to be updated

$id =$_GET['id'];

// craete sql query to update admin

$sql="SELECT * FROM admins WHERE id = '$id'";

//execute the query

$res=mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
  // check whether the data is available or not 
$counts=mysqli_num_rows($res);//function to count all rows in database

//check whether we have admins or not

if ($counts==1) {
  // get the admin details
  echo "Admin avaiable";
  $rows=mysqli_fetch_assoc($res);
  $full_name = $rows['full_name']; 
     $username = $rows['username'];
    $email = $rows['email'];
}
//redirect to manage admin page



else{
  
//redirect to manage admin page

header('LOCATION:'.SITEURL.'Admins.php');

// echo "error";
}}


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
              Username:
            </td>
            <td>
                      
              <input type="text" name="username"  value="<?php echo $username; ?>"></td>
          </tr>
          <tr>
            <td>
              Email:
            </td>
            <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
                    <td>
                    
        <!--   </tr>
               <tr>
                    <td>
                      Confirm Password:
                    </td>
                    <td><input type="Password" name="Confirm_Password" placeholder="Confirm your Password"></td>
                    <td>
                    
               </tr> -->
        </table>
        <input type="hidden"name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Update Admin" class="btn-primary">
      </form>
    </div>

<?php
//check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
  // 
  // echo "button clicked";
  //get all the data  from the form
  
     $id=$_POST['id'];
       $full_name=$_POST['full_name']; 
         $username=$_POST['username'];
            $email=$_POST['email'];

// craete sql query to update admin

$sql="UPDATE admins SET
full_name='$full_name',
username='$username',
email='$email'
 WHERE id='$id'";

//execute the query

$res=mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
  // query excuted sucessfully 

// echo "Admin updated";
$_SESSION['update']="<div class ='success'>Admin updated sucessfully. </div>";

//redirect to manage admin page

header('LOCATION:'.SITEURL.'Admins.php');}
else{
  // query failed to update admin

  // echo "Failed to update Admin";
  $_SESSION['update']='<div class = "error">Failed to update Admin.<br>Try again later.</div>';

//redirect to manage admin page

header('LOCATION:'.SITEURL.'Admins.php');
}}

 ?>
<?php include('./partial/footer.php');?>


