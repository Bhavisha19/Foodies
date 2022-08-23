<?php
$conn = mysqli_connect("localhost", "root", "", "PROJECT_OST");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);

// Attempt insert query execution
$sql = "INSERT INTO about_msg (name, email, subject, message) 
VALUES ('$name','$email','$subject','$message')";
if(mysqli_query($conn, $sql)){
  header("location:about.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 
// Close connection
mysqli_close($conn);
?>