<?php

$conn=mysqli_connect("localhost","root","","web");
?>


<html>

<head>
<title> Login page </title>
<link rel="stylesheet" href="loginStyle.css" type="text/css"/>
</head>

<body>
<?php
//session_start();
if(isset($_POST['login'])){
	
	extract($_POST);
	
	$query="select * from reg where email='$email' AND password='$password'";
	
	$run_query=mysqli_query($conn,$query);
	if($run_query){
	if(mysqli_num_rows($run_query)>0){
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		header("location:product.php");
	}
	else{
		echo"<div class='alert alert-warning'><strong>warning!</strong>login not successfuly....</div>";
	}
	}
}
?>

<div class="lpage">

<div class="head">


		</div>
		<div class="nav_wrapper">
		
			<ul>
				
				<li><a href="home.php">Home</a><li>
				<li><a href="register.php">register</a><li>
				<li><a href="#">Login</a><li>
				
		
			</ul>
		
		</div><br><br>

<div class="login">
<img src="user_login.jpg" width="600" height="250"><br><br>
<form action="" method="POST">
email: &nbsp &nbsp &nbsp<input type="email" name="email" placeholder="emailid" required=""><br><br>
password: <input type="password" name="password" placeholder="password" required=""><br><br>

<br><input type="submit" value="login" name="login">

</form>
</div>

</div>

</body>
</html>

