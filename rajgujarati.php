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
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 5px;
  font-size: 20px;
  text-align: center;
  color: white;
  background: grey;
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
  background-color: #f1f1f1;
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
   padding: 20px;
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
</style>
</head>
<body>
 <?php
  include "header.php";
 ?>

<div class="header">
  <h2>GUJURATI CUISINE - RAJKOT</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">PATEL VIHAAR</h2> 
	  <div><img src="img/rajpatel.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	<h2 style="width:800px;height:10px">PATEL RESTAURANT</h2> 
	  <div><img src="img/patel1.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5> 
	  </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">ADINGO RESTAURANT</h2> 
	  <div><img src="img/adingo.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
	  </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">BIG BITE</h2> 
	  <div><img src="img/big.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
	  </div>
	
	<div style="background-color:white;" class="card">
	   <h2 style="width:800px;height:10px">SURYAKANT RESTAURANT</h2> 
	  <div><img src="img/suryakant.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
	  </div>
    
  </div>
   <div class="rightcolumn">
    <div class="card">
      <h2 align="center">Gujarati Cuisine</h2>
      <div> <center> <img src="img/gujju.jpg" style="width:300px;height:200px;"></center></div>
      <p style="color:white" align="justify">Gujarati cuisine varies widely in flavour and heat, depending on a family's tastes as well as the region of Gujarat to which they belong. North Gujarat, Kathiawad, 
	  Kachchh, Central Gujarat and South Gujarat are the five major regions of Gujarat that contribute their unique touch to Gujarati cuisine. Many Gujarati dishes are 
	  distinctively sweet, salty, and spicy simultaneously.Many Gujarati dishes are distinctively sweet, salty, and spicy simultaneously.</p>
	  <p>&nbsp;</p>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/dhokla.jpg" style="width:313px;height:200px;"><alt style="color:white">Dhokla</alt></div><br>
	  <div><img src="img/kadhi.jpg" style="width:313px;height:200px;"><alt style="color:white">Gujarati Kadhi</alt></div><br>
	  <div><img src="img/patra.jpg" style="width:313px;height:200px;"><alt style="color:white">Patra</alt></div><br>
	  <div><img src="img/dabeli.jpg" style="width:313px;height:200px;"><alt style="color:white">Dabeli</alt></div><br>
	  <div><img src="img/kansar.jpg" style="width:313px;height:200px;"><alt style="color:white">Kansar</alt></div><br>
    </div>

    
  </div>
</div>

 <?php
  include "footer.php";
 ?>

</body>
</html>

