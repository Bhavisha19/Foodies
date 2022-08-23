<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  margin:0;
  font-family: Arial;
  background: #999999;
}


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  background-color: #999999;
  width: 25%;
  height: 100%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: #999999;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
.container {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  position: absolute;
  top: 60%;
  left: 35%;
  transform: translate(-50%, -50%);
  z-index: 2;
  padding: 200px 300px;
  text-align:center;
}
</style>
</head>
<body>
 <?php
  include "header.php";
 ?>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <div class="container">
  <img src="img/wallpaper.jpg" alt="wallpaper" style="width:100%;height:700px;"></div>
  <div class="centered"><h1>Welcome to our site!</h1></div>
  <div style="clear:both;"></div>
    </div>
	</div>
	
	
  <div class="rightcolumn">
    <div class="card">
      <div><center><img src="img/wp2.jpg" style="width:100%;height:200px;"></center><p style="padding-left:10px;">For the users of our site...</p></div>
      <p style="padding-left:10px;padding-right:10px;color:white;font-family:Arial;" align="justify">
	At our site you will get information on the famous restaurants in the five main cities of the state of Gujarat. We have also provided our users with the option of selecting 
	their prefered cuisine that they'd like to have on the basis of which the restaurants have been divided. All you have to do is register as a user of the site & immediately 
	get the information that you require!<br>
    <i style="font-size:14px">*If you have any complaint or query regarding any information that we display at our site, feel free to send us feedback so we can improve our services.</i>
	  </p>
    </div>  
  </div>
    
</div>

 <?php
  include "footer.php";
 ?>

</body>
</html>

</body>
</html>