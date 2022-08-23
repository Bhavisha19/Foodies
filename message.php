<?php
// define variables and set to empty values
if(isset($_POST["submit"])){
      $name=$_POST["name"];
      $email=$_POST["email"];
	  $subject=$_POST["subject"];
      $message=$_POST["message"];
echo "<h2>Your Message</h2>";
echo "Name: ".$name;
echo "<br>Email: ".$email;
echo "<br>Subject: " .$subject;
echo "<br>Message: ".$message;

}
?>
