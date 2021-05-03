<!DOCTYPE html>
<html lang="en">
	<head>
		<title> OTP </title>
					<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
			background-size: cover;
		}
		.container{
			width: 320px;
			height: 300px;
			border: solid;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
			box-shadow: 20px 20px 20px;
			color: black;
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
		<form action="otpx.php" method="post">
			<div class="container">
		<h1>Enter</h1>
			
		
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="OTP"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>