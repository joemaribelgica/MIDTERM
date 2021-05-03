<!DOCTYPE html>
<html lang="en">
<head>
		
		<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
			background-position: center;
			font-family: 'Poppins', sans-serif;
		}
		.container{
			width: 20%;
			height: 20%;
			border: solid;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
			box-shadow: 20px 20px 20px;
			background: transparent;
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
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.container input[type="submit"]{
			width: 50%;
			margin-left: 70px;
			cursor: pointer;
			height: 40px;
			background: #008CBA;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
		<title>
			
			</title>
		</head>
	<body>
		<form action="fox.php" method="post">
			<div class="container">
		
			
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
			<input type="submit" value="Update">
		</form>
	<?php 
?> </div>
		</body>
	</html>

