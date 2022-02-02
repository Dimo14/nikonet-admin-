<?php

//connection to database
include 'config/const.php';


//get tthe id of client to be deleted

$id =$_GET['id'];

// craete sql query to delete client

$sql = "DELETE  FROM clients WHERE id = $id";

//execute the query

$res =mysqli_query($conn,$sql);


//check whether the query is executed sucessfully or not

if ($res==true) {
	// query excuted sucessfully 

// echo "client deleted";
$_SESSION['delete']="<div class ='errors'>Clients Deleted Sucessfully. </div>";

//redirect to client page

header('LOCATION:'.SITEURL.'clients.php');


}else{
	// query failed to delete client

	// echo "Failed to delete client";
	$_SESSION['delete']='<div class = "error">Failed To Delete Client.<br>Try again later.</div>';

//redirect to client page

header('LOCATION:'.SITEURL.'clients.php');
}

//redirect to client with message (success/error)
?>