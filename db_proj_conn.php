<?php
$conn = mysqli_connect("localhost", "root", "");
 
// Check connection
if($conn === false){
    die("Could not connect to database. " . mysqli_connect_error());
}
 
// Print host information
echo "Connection successfully established.";
 
// Close connection
mysqli_close($conn);
?>