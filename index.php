<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
            background-size: cover;
			background-position: center;
			font-family: 'Poppins', sans-serif;
		}
		.container{
			width: 320px;
			height: 400px;
			border: groove;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
			text-align: center;
			color: #004444;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			padding: 30px 30px;
			box-shadow: 20px 20px 20px;
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
		.container input[type="submit"]{
			height: 40px;
			background: pink;
			color: black;
			font-size: 18px;
			border border-radius: 20px;
			cursor: pointer;
		}
</style>
</head>
<body>

     <form action="login.php" method="post">
     	<div class="container">
            <center></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<h2>LOGIN</h2>
		<br>
		<br>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<input type="password" name="password" placeholder="Password"><br>
            
        <input type="submit" value="Login">
<a href="logout.php" class="ca"></a><br/><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp<a href="forgot.php" class="ca">Forgot Password</a>&nbsp&nbsp&nbsp&nbsp&nbsp<br>
			<br>
			<a href="signup.php" class="ca">Create Account</a><br><br>
     	    
          
     </form>
</body>
</html>