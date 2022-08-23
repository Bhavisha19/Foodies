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
  background-image: url("img/wp.jpg");
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #EC7B03;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color:  #999999;
  color: black;
  width: 600px;
  height: 150px;
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

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: black;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
.error{color:white; margin-bottom:5px;}


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
<div class ="container">
    <div class="row">
      <h1 style="color:white;text-align:center;font-family:sans-serif">FOODIES</h1>
	   <h2 style="color:white;text-align:center;font-family:sans-serif">The one stop shop for all 
	  foodies out there!</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="registration.php" class="fb btn">
         <h2 style="text-align:center;font-size:30px;font-family:sans-serif;padding-top:25px;">Register As A User!</h2>
         </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
		<form method="POST">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">
		</form>
		<div class="error"> <?php echo $error ?> </div>
      </div>
      </div>
    </div>


<div class="bottom-container">
  <div class="row">
    <div class="col">
      <p style="color:white;text-align:left;width:800px;font-family:sans-serif;"><b>Note:</b><i style="color:white;">To view the restaurants available in the cities 
	  of the state, kindly register as a user of the site.</i></p>
    </div>
  </div>
</div>

  </body>
 
</html>