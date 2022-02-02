<?php include 'partial/header.php';?>

	<div class="forit">
		<h3>Messages</h3>
	</div>
</div>
<?php
if (isset($_SESSION['delete'])) 
{
    echo $_SESSION['delete']; 
    unset($_SESSION['delete']); 
}


?>

	<table class="tb_full">
		<tr>
			<th>S.N</th>
			<th>full_name</th>
			<th>phone_number</th>
			<th>Emails</th>
			<th>Subject</th>
			<th>Action</th>
		</tr>
		<?php

          // query to get all admin
      $sql="SELECT * FROM messages";

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
                $phone_number=$rows['phone_number'];
                $email=$rows['email'];
                $subject=$rows['subject'];             
                //displaying the values in our table
	?>
		<tr>
			<td><?php echo $sn++;?></td>
             <td><?php echo $full_name;?></td>
             <td><?php echo $phone_number;?></td>
             <td><?php echo $email;?></td>
             <td><?php echo $subject;?></td>
			<td>
				<a href="<?php echo SITEURL;?>delete_message.php?id=<?php echo $id?>"id="delete">Delete Message </a>
			</td>
		</tr>
</table>

<?php
           } 
        }else{
        } 
      }
         ?>

<?php include 'partial/footer.php';?>
