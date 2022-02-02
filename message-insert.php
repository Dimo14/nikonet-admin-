<?php include 'partial front/header.php';?>

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
     $subject = $_POST['subject'];
     $description = $_POST['comment'];

// sql query to save the data into database

$sql ="INSERT INTO messages SET 
full_name= '$full_name',
phone_number= '$phone_number',
email= '$email',
subject= '$subject',
$description=$'comment'";
// echo "$mysqli";

}

// executing query and saving data into database
$res= mysqli_query($conn,$sql) or  die (mysqli_error($conn));

// check whether the data is inserted or not and display appropiate message

 
if($res==true){
     // data inserted
     // echo "data inserted";
     // Create a ssession variable to display message
     $_SESSION['Add-client'] ="<div class='harder'>You have Send Your Message Successfully. </div>";

     // redirect page to manage Admin

     header('LOCATION:'.SITEURL.'contact.php');
}
else{
     // data not inserted
     // echo "data failed to be inserted";
        $_SESSION['Add-client'] =" You have Failed  to Send Message ";

     // redirect page to Add-Admin

     header('LOCATION:'.SITEURL.'contact.php');
}

?>








