<?php
$conn = mysqli_connect("localhost", "root", "", "PROJECT_OST");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$error=" ";

if(isset($_POST['submit']))

{
if(empty($_POST['username']) || empty($_POST['pass']))
	{
		$error='Both fields required';
	}
	else
	{
		$username =$_POST['username'];
		$pass =$_POST['pass'];
		
		$sql = "SELECT * FROM registration WHERE username = '$username' && pass='$pass'";
		
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
		
		if($num==1)
		
		{
				header("refresh:1;url=home.php");
		}
		else
		{
   $error="Incorrect username or password";
}
}
}

?>