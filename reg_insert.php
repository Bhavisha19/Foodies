<?php
$conn = mysqli_connect("localhost", "root", "", "PROJECT_OST");

	// Check connection
	if($conn === false)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
// Escape user inputs for security

$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$state = mysqli_real_escape_string($conn, $_REQUEST['state']);
$day = mysqli_real_escape_string($conn, $_REQUEST['day']);
$month = mysqli_real_escape_string($conn, $_REQUEST['month']);
$year = mysqli_real_escape_string($conn, $_REQUEST['year']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$agree = mysqli_real_escape_string($conn, $_REQUEST['agree']);

	// Attempt insert query execution
	$sql = "INSERT INTO registration (fname, lname, email, mobileno, username, pass, address, city, state, day, month, year, gender, agree) 
	VALUES ('$fname', '$lname', '$email','$mobileno','$username', '$pass', '$address','$city','$state','$day','$month','$year','$gender','$agree')";
	if(mysqli_query($conn, $sql))
	{
	echo "Successfully Registered.";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
	header("refresh:2;url=login1.php")

?>