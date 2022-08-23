<!DOCTYPE html>
<html>
<head>
<title>Information system for restaurants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 20px;
  height:15px;
  width: 15px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}
#fb {
  top: 300px;
}

#google {
  top: 360px;
}

#insta {
  top: 420px;
}

#snap {
  top: 480px;
}
#sky {
  top: 540px;
}


</style>
</head>
<body  style="margin:0;">

  <?php
  include "header.php";
  ?>
<p>&nbsp;</p>
    <h2 align=center><span style="color:black"> Welcome To Our FOODIES<br>
	</span></h2>
	<div style="margin-left:1000px;"><h3>About our website</h3>
	<p>19125007, 19125027 <br>
	19125007@nuv.ac.in<br>
	19125027@nuv.ac.in<br>
	Navrachana University,<br>
	Vasna-Bhayli Road,<br>
	Vadodara-391410 </p>
	<div id="mySidenav" class="sidenav">
	<a href="https://www.facebook.com/" class="fa fa-facebook" id="fb"></a>
	<a href="https://www.google.com/" class="fa fa-google" id="google"></a>
	<a href="https://www.instagram.com/" class="fa fa-instagram" id="insta"></a>
	<a href="https://accounts.snapchat.com/accounts/login?client_id=geo" class="fa fa-snapchat-ghost" id="snap"></a>
	<a href="https://www.skype.com/en/" class="fa fa-skype" id="sky"></a></div></div></body>
<body>  
<?php
// define variables and set to empty values
$name = $email = $subject = $message = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<table>
<tr>
<td width="900px">
<div style="margin-left:300px;font-size:20px;">
<h2>Send us a Message</h2>
  <form method="post" action="msg_insert.php">
    <input type="text" name="name" placeholder="Full Name.."style="height:20px;width:400px;" value="<?php echo $name;?>"><br><br>
    <input type="text" name="email" placeholder="E-mail.." style="height:20px;width:400px;"value="<?php echo $email;?>"><br><br>
    <input type="text" name="subject" placeholder="Subject.." style="height:20px;width:400px;"value="<?php echo $subject;?>"><br><br>
    <textarea name="message" placeholder="Your Message.." style="height:100px;width:400px;"><?php echo $message;?></textarea><br><br>
	<button onclick="myFunction()">Submit</button>
<script>
function myFunction() {
  alert("Your response has been submitted. Thank you!");
}
</script>
  </form>
  </div>
  </td>
  <td>
  <img src="img/contact.jpg" alt="box" width="400" height="300"></td>
  </tr>
  </table>
  <p>&nbsp;</p>
  <div style="clear:both;"></div>
<?php
 include "footer.php";
 ?>
 </div>
</body>
</html>
