<!DOCTYPE html>
<html lang="en">
	<head>



		<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
			
		}
		.container{
			width: 320px;
			height: 400px;
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
		<title>
			
			</title>
		</head>
	<body>
		<form action="codex.php" method="post">
			<div class="container">
		
		<center><p><h2>Enter your Username</h2></p></center>
		<br><br><br>
			
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>

