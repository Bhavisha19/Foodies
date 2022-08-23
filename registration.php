<html>  
<head>  
</head>  
<body>    
<style>
body {
  margin: 0;
  background-image: url("img/wp.jpg");
  background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;
}


.centered {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  position: relative;
}

</style>
</head>
<?php
  include "regishead.php";
?>
 
<h1 style="padding-left:550px;font-family:Arial;color:white;">Join The Foodies Gang!</h1> 
 
<div class="centered">
<form method="post" action="reg_insert.php">    
<table style="margin-left:600px;color:white;">
	<tr>  
		<td>First Name:</td>
		<td><input type="text" name="fname" placeholder="First Name" required></td>
	</tr> 
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lname" placeholder="Last Name" required>  </td>
    </tr> 
	<tr>
		<td>Email:</td>
		<td><input type="text" name="email" placeholder="Email" required></td>  
    </tr> 
	 <tr>
		<td>Mobile No:</td>
		<td><input type="text" name="mobileno" placeholder="Mobile No" required></td>
    </tr> 
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" placeholder="Username" required></td>
	</tr>
	<tr>
		<td>New Password:</td>
		<td><input type="password" name="pass" placeholder="Password" required></td>
    </tr> 
	<tr>
		<td>Address:</td>
		<td colspan="2"><textarea name="address" placeholder="Address" rows="5" cols="40" required></textarea></td> 
    </tr>
	<tr>
		<td>City:</td>
		<td><input type="text" name="city" placeholder="City" required></td>
	</tr>
	<tr>
		<td>State:</td>
		<td><select name="state" required>
			<option value="gujarat">Gujarat</option>
			<option value="maharashtra">Maharashtra</option>
			<option value="rajasthan">Rajasthan</option>
		</select></td>
	</tr>
    <tr>
	<td>D.O.B:</td>
		<td><select name="day" required>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="month" required>
			<option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
		</select>
		<select name="year" required>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>  
		</select>
		</td>
		</tr>
		<tr>
		<td>Gender:</td>
		<td><input type="radio" name="gender" value="male"> Male  
		<input type="radio" name="gender" value="female"> Female  
		<input type="radio" name="gender" value="other"> Other  </td> 
    </tr> 
	<tr>
		<td>Agree to Terms:</td> 
		<td><input type="checkbox" name="agree" required>  </td>
	</tr>
	<tr>
	<td> <input type="submit" value="Register"></td> 
	</tr>	
	<tr>
	<td colspan="2"><div style="padding:10px 0 0 35px;"> Have an Account? <a href="login1.php" style="color:#EC7B03">Login</a></div></td> 
	</tr>	
	</table>
	</form>
	</div>
<?php
  include "footer.php";
  ?>
</form>    
</body>  
</html>  