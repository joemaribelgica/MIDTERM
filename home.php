
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			margin: 0;
			padding: 0;
			background: skyblue;
			
		
		}
		.container{
			width: 320px;
			height: 200px;
			border: solid;
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

		
    
        [type="submit"] {
			height: 40px;
			background: pink;
			color: black;
			text-decoration: none;
			font-size: 18px;
			border border-radius: 20px;
		}
		a{
			text-decoration: none;
		}
       
		</style>
	<title>HOME</title>
	
</head>
<body>
	 
	<div class="container">
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	 <h1><center><button type="submit"><a href="logout.php">Logout</a> </button></center><br/></h1>
	 <h1><center><button type="submit">  <a href="display.php" >View Activity</a> </button></center></h1>
	</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            