<?php
$conn = mysqli_connect("localhost", "root", "", "PROJECT_OST");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE about_msg(
    name VARCHAR(100) NOT NULL,
	email VARCHAR(30) NOT NULL,
	subject VARCHAR(30) NOT NULL,
	message VARCHAR(100) NOT NULL
	)";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>