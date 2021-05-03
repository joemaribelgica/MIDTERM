 <?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
           
		}
		.container{
			width: 320px;
			height: 50%;
			border: solid;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
			box-shadow: 20px 20px 20px;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
		}
		.container p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.container input{
			width: 100%;
			margin-bottom: 20px;
		}
		.container input[type="text"], input[type="password"]{
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.container input[type="email"]{
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.container button[type="submit"]{
			padding: 10px;
			width: 100%;
			background: pink;
			cursor: pointer;
			
		}
</style>


          

		
				<div class="container">
				<center><h1>Sign Up</h1></center>

				<form action="#" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required= ""/>
					<input class="text email" type="email" name="email" placeholder="Email" required=""/>
					<input class = "text" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="cpassword" placeholder="Confirm Password" required = ""/>
	
					<center><button class = "submit" type="submit" value="Sign Up" name = "submit">Submit</button></center>
					<br>
					<p><center><a href="login.php"> Login Now!</a></center></p>
				</form>	

				
			

<?php

if(isset($_POST['submit'])){
	

$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];
$n4=$_POST['cpassword'];

$stmt="INSERT INTO users (username,password,email)VALUES('$n1','$n2','$n3')";

if($n2 == $n4){

	mysqli_query($link,$stmt);




	echo"<script>alert('Account Succesfully Created');window.location='login.php'</script>";
}
else{
	echo"<script>alert('Your Password Didnt Match');window.location='signup.php'</script>";
}
}
?>

</body>
</html>