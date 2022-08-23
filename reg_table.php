<?php
$conn = mysqli_connect("localhost", "root", "", "PROJECT_OST");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE registration(
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	mobileno bigint NOT NULL,
	username VARCHAR(30) NOT NULL PRIMARY KEY,
	pass VARCHAR(30) NOT NULL,
	address VARCHAR(30) NOT NULL,
	city VARCHAR(30) NOT NULL,
	state VARCHAR(30) NOT NULL,
	day int NOT NULL,
	month VARCHAR(30) NOT NULL,
	year int NOT NULL,
	gender VARCHAR(30) NOT NULL,
	agree VARCHAR(30) NOT NULL
	)";
	
if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>