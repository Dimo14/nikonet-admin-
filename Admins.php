 
<?php include './partial/header.php';?>
<!-- Admins section starts  -->

<div class="too">
	<div class="down">
		<h3>Manage Admins</h3>
		<br>
 <br>
 <?php 
if (isset($_SESSION['add-admin'])) 
{
    echo $_SESSION['add-admin']; //displaying message
    unset($_SESSION['add-admin']); //removing message
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
if (isset($_SESSION['update'])) 
{
    echo $_SESSION['update']; 
    unset($_SESSION['update']); 
}
if (isset($_SESSION['delete'])) 
{
    echo $_SESSION['delete']; 
    unset($_SESSION['delete']); 
}

?>
 
<br>
<br>
		<!-- button to add client -->
    <a href="add_admin.php" class="btn-primary">Add Admin </a>
	</div>
	<form action="" method="POST">
	<table class="tb_full">
		<tr>
			<th>S.N</th>
			<th>full_name</th>
			<th>username</th>
			<th>email</th>
			<th>Action</th>
		</tr>
		<?php

          // query to get all admin
      $sql="SELECT * FROM admins";

      //Execute the query
      $res=mysqli_query($conn,$sql);

      //check whether the query is executed or not

      $sn=1;//create a variable and assign the value

      if ($res==true) {
          // count rows to check whether we have data in database or not

          $counts= mysqli_num_rows($res);//function to count all rows in database

          //check the num of rows
        if ($counts>0) {
            // we have data in database
            while ($rows=mysqli_fetch_assoc($res)) {
                // using while loop to get data from database
                //and while loop will run aslong as we have data in database


                //get individual data 
                $id=$rows['id'];
                $full_name=$rows['full_name'];
                $username=$rows['username'];
                $email=$rows['email'];              
                //displaying the values in our table

		?>
    <tr>
                      <td><?php echo $sn++;?></td>
                      <td><?php echo $full_name;?></td>
                      <td><?php echo $username;?></td>
                      <td><?php echo $email;?></td>
                     <td>  
				     <a href="<?php echo SITEURL;?>update_admin.php?id=<?php echo $id?>"id="update">Update admin </a>
                     <a href="<?php echo SITEURL;?>delete_admin.php?id=<?php echo $id?>"id="delete">Delete admin </a>
                     <a href="<?php echo SITEURL;?>change_password.php?id=<?php echo $id?>"id="update">Change password </a>
			</td>
						</td>

<?php
           } 
        }else{
        } 
      }
         ?>
      
	</table>
	</form>
</div>
<!-- admins section ends -->
<?php include './partial/footer.php';?>