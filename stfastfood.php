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
  <h2>FAST FOODS - SURAT</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">THE GLORIOUS RESTAURANT</h2> 
	  <div><img src="img/the.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">MAHALAXMI JUICE & FASTFOOD</h2> 
	  <div><img src="img/mahalaxmi.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:30pm] & [07:30pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">MAHESH PAVBHAJI</h2> 
	  <div><img src="img/mahesh.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.900 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:00pm] & [06:00pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">KSHITIJ RESTAURANT</h2> 
	  <div><img src="img/kshitij.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 08:00am to 08:00pm</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">GEETHA RESTAURANT</h2> 
	  <div><img src="img/geetha.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.800 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 11:00am to 11:00pm</h5>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card" style="background-color:#999999;">
      <h2 align="center">Fast Foods</h2>
      <div> <center> <img src="img/fast_food.jpg" style="width:300px;height:200px;"></center></div>
      <p style="color:white" align="justify">Fast food is a type of mass-produced food designed for commercial resale and with a strong priority placed on "speed of 
	  service" versus other relevant factors involved in culinary science.</p>
   <br>
   <br>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/pizza.jpg" style="width:300px;height:200px;"><alt style="color:white">Pizza</alt></div><br>
	  <div><img src="img/burger.jpg" style="width:300px;height:200px;"><alt style="color:white">Burger</alt></div><br>
	  <div><img src="img/pani_puri.jpg" style="width:300px;height:200px;"><alt style="color:white">Pani Puri</alt></div><br>
	  <div><img src="img/vada_pav.jpg" style="width:300px;height:200px;"><alt style="color:white">Vada Pav</alt></div><br>
	  <div><img src="img/ice.jpg" style="width:300px;height:200px;"><alt style="color:white">Ice Cream</alt></div><br>
    </div>
    
  </div>
</div>

 <?php
  include "footer.php";
 ?>

</body>
</html>