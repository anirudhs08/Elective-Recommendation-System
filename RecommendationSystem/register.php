<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body">

	<div class="row">
        <div class="logo">
        <img src="logo.png"
    </div>
            
    <ul class="main-nav">    
        <li><a href="index.html"> HOME </a></li>
        <li class="active"><a href="register.php"> SIGN UP </a></li>
        <li><a href="login.php"> LOG IN </a></li>
        <li><a href="about.html"> ABOUT US </a></li>

    </ul>    
        
    </div>

	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php" >

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label font-family="Comic Sans MS">Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label font-family="Comic Sans MS">Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label font-family="Comic Sans MS" >Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label font-family="Comic Sans MS">Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" font-family="Comic Sans MS" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>