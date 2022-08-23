<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  margin: 0;
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  background-color: #999999;
  color:white;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
  background-color: white;
  padding: 20px;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

</style>
</head>
<body style="font-family: Arial;">
 <?php
  include "header.php";
  ?>
<div class="row">
  <div class="side">
    <h2>Famous Cuisines</h2>
   <h5>Famous cuisines that the city is known for!</h5>
     <a href="rajpunjabi.php" style="color:black"><img src="img/punjabi_food.jpg" alt="box" width="250" height="150" hspace="10" align="center" style="margin-left:10%"/><br>
	<div align="center">PUNJABI CUISINE</a></div><br>
     <a href="rajchinese.php" style="color:black"><img src="img/china.jpg" alt="box" width="250" height="150" hspace="10" align="center" style="margin-left:10%"/><br>
	<div align="center">CHINESE CUISINE</a></div><br>
	 <a href="rajfastfood.php" style="color:black"><img src="img/fastfood.jpg" alt="box" width="250" height="150" hspace="10" align="center" style="margin-left:10%"/><br>
	<div align="center">FAST FOODS</a></div><br>
	 <a href="rajgujarati.php" style="color:black"><img src="img/gujju.jpg" alt="box" width="250" height="150" hspace="10" align="center" style="margin-left:10%"/><br>
	<div align="center">GUJARATI CUISINE</a></div><br>
	 <a href="rajmulti.php" style="color:black"><img src="img/multi.jpg" alt="box" width="250" height="150" hspace="10" align="center" style="margin-left:10%"/><br>
	<div align="center">MULTI-CUISINE </a></div><br>
  </div>
  <div class="main">
    <h2>RAJKOT</h2>
    <h5>The largest city in the state of Gujarat!</h5>
	<div style="margin-left:30px;">
    <img src="img/rajkot.jpg" alt="box" width="1000" height="700" hspace="10" align="center"/><br>
    <p>A little about the city...</p>
   <p>Ahmedabad is one of the largest cities in India and it is the first UNESCO world heritage city of this country. 
	The city is famous for its warm hospitality and friendly people. 
	The people here are fond of eating and one can find numerous restaurants and road-side food installments here. 
	The street food in Ahmedabad makes it a gastronomic paradise and the local Gujarati Thali is famous among visitors. 
	Also, snacks, sweets, and street foods are must-try when one visits this beautiful city.</p>
	</div>
    </div>
	</div>
 <?php
  include "footer.php";
  ?>
</body>
</html>