<?php

//connection to database
include 'config/const.php';


//get tthe id of admin to be deleted

$id =$_GET['id'];

// craete sql query to delete admin

$sql="DELETE  FROM messages WHERE id =$id";

//execute the query

$res=mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
	// query excuted sucessfully 

// echo "Admin deleted";
$_SESSION['delete']="<div class ='error'>Message Deleted Sucessfully. </div>";

//redirect to manage admin page

header('LOCATION:'.SITEURL.'message.php');


}else{
	// query failed to delete admin

	// echo "Failed to delete Admin";
	$_SESSION['delete']='<div class = "error">Failed To Delete Message.<br>Try again later.</div>';

//redirect to manage admin page

header('LOCATION:'.SITEURL.'message.php');


}
?>

<!-- /redirect to manage admin with message (success/error)
 -->













