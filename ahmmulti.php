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
  <h2>MULTI-CUISINE - AHMEDABAD</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">BISTRO BASH RESTAURANT</h2> 
	  <div><img src="img/bistro.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>17 China House Alkapuram Ashram Road Usmanpura, Ahmedabad 380014 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">TREAT RESTAURANT</h2> 
	  <div><img src="img/treat.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>Gulmohar Park 4th Floor,Store No. R5 R8 R9 Near Satellite Police Station,SG Road,Ahmedabad 380015 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:30pm] & [07:30pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">THE OLIVE RESTAURANT</h2> 
	  <div><img src="img/olive.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>C.G. Road Near Associate Petrol Station, Shop 303, CG Square Mall, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.900 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:00pm] & [06:00pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">KURO CAFE</h2> 
	  <div><img src="img/kuro.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>H. L. Commerce College Road Navrangpura, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 08:00am to 08:00pm</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">THE PRESIDENT RESTAURANT</h2> 
	  <div><img src="img/presi.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
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
      <h2 align="center">Multi-Cuisine</h2>
      <div> <center> <img src="img/multi.jpg" style="width:300px;height:200px;"></center></div>
      <p style="color:white" align="justify">Multi-cuisine dishes consist of different continental food items that are sometimes fusioned with the dishes of the continent
	  that they're served at. Multi-cuisine restaurants serve Indian, Chinese, Italian, American and French food providing a unique culinary experience that allows people
	  to relish various flavourful dishes from continents that they haven't even visited.</p>
	  <br>
	  <br>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/lasa.jpg" style="width:313px;height:200px;"><alt style="color:white">Lasagna</alt></div><br>
	  <div><img src="img/sizz.jpg" style="width:313px;height:200px;"><alt style="color:white">Sizzler</alt></div><br>
	  <div><img src="img/thai.jpg" style="width:313px;height:200px;"><alt style="color:white">Thai curry</alt></div><br>
	  <div><img src="img/hummus.jpg" style="width:313px;height:200px;"><alt style="color:white">Hummus</alt></div><br>
	  <div><img src="img/crepe.jpg" style="width:313px;height:200px;"><alt style="color:white">Crepes</alt></div><br>
    </div>
    
  </div>
</div>

 <?php
  include "footer.php";
 ?>

</body>
</html>