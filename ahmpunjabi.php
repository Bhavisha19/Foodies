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
  <h2>PUNJABI CUISINE - AHMEDABAD</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">JASSI DE PARANTHE</h2> 
	  <div><img src="img/jassi.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>17 China House Alkapuram Ashram Road Usmanpura, Ahmedabad 380014 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">DIL E PUNJAB</h2> 
	  <div><img src="img/dil_e.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>Gulmohar Park 4th Floor,Store No. R5 R8 R9 Near Satellite Police Station,SG Road,Ahmedabad 380015 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:30pm] & [07:30pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">STUFF'S FOOD</h2> 
	  <div><img src="img/stuffs1.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>C.G. Road Near Associate Petrol Station, Shop 303, CG Square Mall, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.900 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:00pm] & [06:00pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">CURRIES</h2> 
	  <div><img src="img/curries1.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>H. L. Commerce College Road Navrangpura, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 08:00am to 08:00pm</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">FROM THE NORTH</h2> 
	  <div><img src="img/from_the.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>Prahlad Nagar, Ahmedabad 380015 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.800 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 11:00am to 11:00pm</h5>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2 align="center">Punjabi Cuisine</h2>
      <div> <center> <img src="img/punjabi_food.jpg" style="width:300px;height:200px;"></center></div>
      <p style="color:white" align="justify">Punjabi cuisine is a culinary style originating in the Punjab, a region in the northern part of the Indian subcontinent, 
      which is now divided in an Indian part and a Pakistani part.This cuisine has a rich tradition of many distinct and local ways of cooking.Locally grown staple 
	  foods form the major part of the local cuisine.Distinctively Punjabi cuisine is known for its rich, buttery flavours along with the extensive vegetarian and meat dishes.</p>
	  <br>
	  <br>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/palak_paneer.jpg" style="width:313px;height:200px;"><alt style="color:white">Palak Paneer</alt></div><br>
	  <div><img src="img/dal_makhani.jpg" style="width:313px;height:200px;"><alt style="color:white">Dal Makhani</alt></div><br>
	  <div><img src="img/pbm.jpg" style="width:313px;height:200px;"><alt style="color:white">Paneer Butter Masala</alt></div><br>
	  <div><img src="img/chole.jpg" style="width:313px;height:200px;"><alt style="color:white">Chole Bhature</alt></div><br>
	  <div><img src="img/phirni.jpg" style="width:313px;height:200px;"><alt style="color:white">Phirni</alt></div><br>
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