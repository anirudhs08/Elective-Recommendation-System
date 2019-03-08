<html>
<head>
    <title>Jarvis</title>
    <link href="style2.css" rel="stylesheet" type="text/css">
</head> 
<body>
    <header>
        
    <div class="row">
        <div class="logo">
        <img src="logo.png"
    </div>
            
    <ul class="main-nav">    
    	<li><a href="index.php"> TIMELINE </a></li>
        <li><a href=""> RECOMMEND </a></li>
        <li class="active"><a href="feedback.html"> FEEDBACK </a></li>
        <li><a href="index.php?logout='1'"> LOG OUT </a></li>

    </ul>    
        
    </div>
    

    <?php 
	extract($_GET);
	$con=mysqli_connect('localhost','root','','registration');
	$sql="Insert into feedbacknew values('$FirstName','$email','$bday','$occupation','$a1','$feedback')";
	mysqli_query($con,$sql);
	?>

	<center><strong><h1 id="hey">Thank you for your feedback</h1></strong></center>


    
    </header>


        
</body>    
</html>
