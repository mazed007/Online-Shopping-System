<?php
$conn=mysqli_connect("localhost","root","","order");
?>



<html>
<head>
<title> Order </title>
<link rel="stylesheet" href="productStyle.css" type="text/css" />
</head>

	<body>
		<div class="page">
		<div class="header">
		<h1>Online Shopping System</h1>
		</div>
		<div class="main">
		<div class="ordr">

<img src="order.jpg" width="600" height="250"><br><br>
<form action="" method="POST">
User_name: &nbsp &nbsp &nbsp <input type="text" name="User_name" placeholder="name" required=""><br>
<br>
Address: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="Address" placeholder="Address" required=""><br><br>


Phone_Number: <input type="text" name="phone_number" placeholder="Phone_Number" required=""><br><br>

Product_code: &nbsp &nbsp <input type="text" name="Product_code" placeholder="Product_code" required=""><br><br>

Product_Price: &nbsp &nbsp <input type="text" name="Product_Price" placeholder="Product_Price" required=""><br><br>

email: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="email" name="email" placeholder="emailid" required=""><br><br>
<br><input type="submit" value="submit" name="submit"><br>

<?php

if(isset($_POST['submit'])){
	
	$User_name=$_POST['User_name'];
	$Address=$_POST['Address'];
	$phone_number=$_POST['phone_number'];
	$Product_code=$_POST['Product_code'];
	$Product_Price=$_POST['Product_Price'];
	$email=$_POST['email'];
	

	$query="insert into orderlist(User_name,Address,phone_number,Product_code,Product_Price,email)values('$User_name','$Address','$phone_number','$Product_code','$Product_Price','$email')";
	$run=mysqli_query($conn,$query);
	
	if($run){
		
		echo"data insert successfuly";
	}
	else{
		echo"error:".mysqli_error($conn);
	}
}
?>
</form>
</div>
		</div>
		
		
		
		<div class="footer">
		

		<br>
		<a href="https://www.facebook.com/BDshoping/">
		<img src ="fb.png" align="right" height="30" width="30"/></a>
		<a href="https://twitter.com/hashtag/onlineshopping?f=images&vertical=default&lang=en">
		<img src ="twitter.png" align="right" height="30" width="30"/></a>
		<img src ="gmail.png" align="right" height="30" width="30"/>
		<a href="https://www.instagram.com/shopping_on_linee/?hl=en">
		<img src ="instagram.png" align="right" height="30" width="30"/></a>
		
		<p><a href="home.php">Home</a></p>
		<p><a href="AboutUs.php">About us</a></p>
		<p>Contact us</p>
		</div>
		
		</div>
		
		
	</body>

</html>