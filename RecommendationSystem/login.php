<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body" >
       
    <div class="row">
        <div class="logo">
        <img src="logo.png"
    </div>
            
    <ul class="main-nav">    
        <li><a href="index.html"> HOME </a></li>
        <li><a href="register.php"> SIGN UP </a></li>
        <li class="active"><a href="login.php"> LOG IN </a></li>
        <li><a href="about.html"> ABOUT US</a></li>

    </ul>    
        
    </div>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>