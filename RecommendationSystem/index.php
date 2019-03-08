<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="style2.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	.video {
    width: 400px;
    padding: 0;
    margin: 0;
    position: center;
	}
	</style>
</head>
<body>

	<header>
        
    <div class="row">
        <div class="logo">
        <img src="logo.png"
    </div>
            
    <ul class="main-nav">
    	<li class="active"><a href="index.php"> TIMELINE </a></li>    
		<li><a href="Form.html"> RECOMMEND </a></li>
        <li><a href="feedback.html"> FEEDBACK </a></li>
        <li><a href="index.php?logout='1'"> LOG OUT </a></li>


    </ul>    
   

	<div class="ola1">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>

	 
            
    </div>
	<div>
	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/9gBC9R-msAk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
	</div>
	</header>
	<!--<iframe src="http://www.youtube.com/embed/W7qWa52k-nE"
	width="560" height="315" frameborder="0" allowfullscreen></iframe> -->
	
		
</body>
</html>