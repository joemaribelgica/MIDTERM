<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			background: skyblue;
			background-size: auto;
			background-position: center;
			font-family: 'Poppins', sans-serif;
		}
		.container{
			width: 320px;
			height: 450px;
			border: solid;
			box-shadow: 20px 20px 20px;
			border-top-right-radius: 20px;
			border-bottom-left-radius: 20px;
			background: transparent;
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
		}
</style>
</head>
<body>
	<div class="container">
     <form action="foxcheck.php" method="post">
     	<center><p><h2>FORGOT PASSWORD</h2></p></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


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


     	
     	<input type="password" 
                 name="password" 
                 placeholder="New Password"><br>

        
          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirm Password"><br>
<a href="index.php" class="ca">Already have an account?</a><br><br>
     	<input type="submit" value="Update Password">
          
     </form>
</body>
</html>