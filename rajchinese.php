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
  <h2>CHINESE CUISINE - RAJKOT</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">BABJI GRILL KITCHEN</h2> 
	  <div><img src="img/babji.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	   <h2 style="width:800px;height:10px">STREET KITCHEN</h2> 
	  <div><img src="img/street.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5> 
	  </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">HONEST RESTAURANT</h2> 
	  <div><img src="img/rajhonest.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
	  </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">PALLAV FOODS</h2> 
	  <div><img src="img/pallav.jpeg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>street-name,random-road,city-name,pin-code:12345,Gujarat,India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
	  </div>
	
	<div style="background-color:white;" class="card">
	   <h2 style="width:800px;height:10px">APPLE BITE</h2> 
	  <div><img src="img/apple.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
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
      <h2 align="center">Chinese Cuisine</h2>
     <div> <center> <img src="img/china.jpg" style="width:300px;height:200px;"></center></div>
      <p align="justify">A typical Chinese meal will have two things - a carbohydrate or starch like noodles, rice or buns, and accompanying stir fries or dishes of veggies, 
	  fish and meat.</p>
		<br>
		<br>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/momo.jpg" style="width:300px;height:200px;">Momos</div><br>
	  <div><img src="img/fried_rice.jpg" style="width:300px;height:200px;">Fried Rice</div><br>
	  <div><img src="img/manchow.jpg" style="width:300px;height:200px;">Manchow Soup</div><br>
	  <div><img src="img/ramen4.jpg" style="width:300px;height:200px;">Ramen</div><br>
	  <div><img src="img/manchurian1.jpg" style="width:300px;height:200px;">Manchurian Dumplings</div><br>
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