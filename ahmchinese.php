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
  <h2>CHINESE CUISINE - AHMEDABAD</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">CHINA HOUSE</h2> 
	  <div><img src="img/china_house2.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>17 China House Alkapuram Ashram Road Usmanpura, Ahmedabad 380014 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.2400 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:30pm to 03:00pm] & [07:00pm to 11:30pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">MAINLAND CHINA</h2> 
	  <div><img src="img/mainland_china.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>Gulmohar Park 4th Floor,Store No. R5 R8 R9 Near Satellite Police Station,SG Road,Ahmedabad 380015 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:30pm] & [07:30pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">NANJING RESTAURANT</h2> 
	  <div><img src="img/nanjing.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:270px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>C.G. Road Near Associate Petrol Station, Shop 303, CG Square Mall, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.900 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> [12:00pm to 03:00pm] & [06:00pm to 11:00pm]</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">CRAZY NOODLES</h2> 
	  <div><img src="img/crazy_noodles.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
      <p align="justify" style="padding-top:10px;padding-bottom:30px;width:1050px;height:20px;">This is a sample paragraph that describes the dishes available at the 
	  restaurant and lets the users know about all the special and popular dishes that the restaurant offers. It also describes the interiors of the restaurant along 
	  with its ambience.</p><br>
	  <p>&nbsp;</p>
	  <h5 align="left"><b>H. L. Commerce College Road Navrangpura, Ahmedabad 380009 India</b></h5>
      <h5 align="left"><b>Budget Range:</b> Rs.1200 for two approx.</h5>
	  <h5 align="left"><b>Timings:</b> 08:00am to 08:00pm</h5>
    </div>
	
	<div style="background-color:white;" class="card">
	  <h2 style="width:800px;height:10px">YANKI RESTAURANT</h2> 
	  <div><img src="img/yanki.jpg" style="padding-top:10px;padding-right:20px;float:left;width:480px;height:250px;"></div>
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
      <h2 align="center">Chinese Cuisine</h2>
      <div> <center> <img src="img/china.jpg" style="width:300px;height:200px;"></center></div>
      <p style="color:white" align="justify">Chinese cuisine includes cuisine originating from the diverse regions of China, as well as from Overseas Chinese who have 
	  settled in other parts of the world. This cuisine has influenced many other cuisines in Asia, with modifications made to cater to local palates. Chinese food 
	  staples such as rice, soy sauce, noodles, tea, and tofu, and utensils such as chopsticks and the wok, can now be found worldwide.</p>
	  <br>
	  <br>
      <h3>Popular Dishes To Try</h3>
      <div><img src="img/momo.jpg" style="width:313px;height:200px;"><alt style="color:white">Momos</alt></div><br>
	  <div><img src="img/fried rice.jpg" style="width:313px;height:200px;"><alt style="color:white">Fried Rice</alt></div><br>
	  <div><img src="img/manchow.jpg" style="width:313px;height:200px;"><alt style="color:white">Manchow Soup</alt></div><br>
	  <div><img src="img/ramen4.jpg" style="width:313px;height:200px;"><alt style="color:white">Ramen</alt></div><br>
	  <div><img src="img/manchurian1.jpg" style="width:313px;height:200px;"><alt style="color:white">Manchurian Dumplings</alt></div><br>
    </div>
    
  </div>
</div>

 <?php
  include "footer.php";
 ?>

</body>
</html>