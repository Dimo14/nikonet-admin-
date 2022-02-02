<?php include 'partial/header.php';?>
<!-- clients section starts -->
<div class="too">
	<div class="down">
		<h3>Manage Clients</h3>

		<br>
		         <?php
if (isset($_SESSION['Add-client'])) 
{
    echo $_SESSION['Add-client']; //displaying message

    unset($_SESSION['Add-client']); //removing message
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
    <a href="add_client.php" class="btn-primary">Add Client </a>
	</div>
	<form action="" method="POST">
	<table class="tb_full">
		<tr>
			<th>S.N</th>
			<th>full_name</th>
			<th>phone_number</th>
			<th>emails</th>
			<th>packages</th>
            <th>Status</th>
			<th>Action</th>
		</tr>
		<?php

          // query to get all admin
      $sql="SELECT * FROM clients";

      //Execute the query
      $res =mysqli_query($conn,$sql);

      //check whether the query is executed or not

      $sn=1;//create a variable and assign the value

      if ($res==true) {
          // count rows to check whether we have data in database or not

          $counts = mysqli_num_rows($res);//function to count all rows in database

          //check the num of rows
        if ($counts>0) {
            // we have data in database
            while ($rows=mysqli_fetch_assoc($res)) {
                // using while loop to get data from database
                //and while loop will run aslong as we have data in database


                //get individual data 
                $id=$rows['id'];
                $full_name=$rows['full_name'];
                $phone_number=$rows['phone_number'];
                $email=$rows['email'];
                $packages=$rows['packages'];
                $status=$rows['status'];
                //displaying the values in our table

		?>

		<tr>
            <td><?php echo $sn++;?></td>
            <td><?php echo $full_name;?></td>
            <td><?php echo $phone_number;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $packages;?></td>
            <td><?php echo $status;?></td>
                     <td>  
				 <a href="<?php echo SITEURL; ?>update_client.php?id=<?php echo $id?>" id="update">Update client </a>
                     <a href="<?php echo SITEURL; ?>delete_client.php?id=<?php echo $id?>" id="delete">Delete client </a>
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
<!-- clients section ends -->
	<?php include './partial/footer.php';?>