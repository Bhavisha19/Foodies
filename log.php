<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" >
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  padding: 60px;
  padding-top:60px;
  align: center;
  background-repeat: no-repeat; 
  background-size: cover;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  align: center;
  border-radius: 5px;
  background-color: #EC7B03;
  padding: 20px 0 30px 0;
} 



/* style the submit button */
input[type=submit] {
  background-color: #999999;
  color: black;
  font-family: sans-serif;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #999999;
}






</style>
</head>

<body>
<?php
  include "login_conn.php";
?>

<div class="topnav">
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>

   
      <h1 style="color:black;text-align:center;font-family:sans-serif">Login Page</h1>
	   

    
      
		<form method="POST" style="text-align:center;">
        <input type="text" name="username" placeholder="Username" ><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" name="submit" value="Login">
		</form>
		

  </body>
 
</html>