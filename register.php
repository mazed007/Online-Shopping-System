<?php
$conn=mysqli_connect("localhost","root","","web");
?>



<html>

<head>
<title> Register page </title>
<link rel="stylesheet" href="registerStyle.css" type="text/css"/>
</head>
<body>

<?php

/*if(isset($_POST['submit'])){
	
	$User_name=$_POST['User_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone_number=$_POST['phone_number'];

	$query="insert into reg(User_name,email,password,phone_number)values('$User_name','$email','$password','$phone_number')";
	$run=mysqli_query($conn,$query);
	
	if($run){
		
		echo"data insert successfuly";
	}
	else{
		echo"error:".mysqli_error($conn);
	}
}*/
?>


<div class="lpage">

<div class="head">


		</div>
		<div class="nav_wrapper">
		
			<ul>
				
				<li><a href="home.php">Home</a><li>
				<li><a href="#">register</a><li>
				<li><a href="login.php">Login</a><li>
		
			</ul>
		
		</div><br><br>

<div class="login">

<img src="Registration.png" width="600" height="250"><br><br>
<form action="" method="POST">
User_name: &nbsp &nbsp <input type="text" name="User_name" placeholder="name" required=""><br>
<br>
password: &nbsp &nbsp &nbsp &nbsp <input type="password" name="password" placeholder="password" required=""><br><br>

email: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="email" name="email" placeholder="emailid" required=""><br><br>

Phone_Number: <input type="text" name="phone_number" placeholder="Phone_Number" required=""><br><br>
<br><input type="submit" value="Submit" name="submit"><br>
<?php

if(isset($_POST['submit'])){
	
	$User_name=$_POST['User_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone_number=$_POST['phone_number'];

	$query="insert into reg(User_name,email,password,phone_number)values('$User_name','$email','$password','$phone_number')";
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

</body>
</html>

