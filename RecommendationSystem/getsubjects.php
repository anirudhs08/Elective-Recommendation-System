<?php
	extract($_GET);
	//$dept = 'Data Science';
	//$project = 'social network analysis';
	//$gpa = 9.90;


	//$modi=explode(";",$st);

	//$project=$modi[0];
	//$dept=$modi[1];
	//$gpa=$modi[2];
	$file = fopen("subjects.txt","r");
	while($line = fgets($file))
	{
		$modline = trim($line);
		
		$arr = explode(";",$modline);
		$found = false;
		if($dept == $arr[0])
		{
			$found = true;
			break;
		}
	}
	
	if($found == true)
	{
	
		//echo "$modline","\n";
		//echo gettype($modline);
		$arr = explode(";",$modline);
		//print_r($arr);
		$max=0;
		$index=-1;
		$i=1;
		while($i < 9)
		{
			similar_text($arr[$i], $proj,$similarity);
			//print_r($similarity);
			echo "\n\n";
			if($similarity > $max && $gpa>=$arr[++$i])
			{
				$max=$similarity;
				$index=$i-1;

			}
			++$i;

		}
		//print_r($arr[$index]);
		
		//echo "<script type= 'text/javascript'>";
		//echo "parent.obj2.showResult('anirudh');";
		//echo "</script>";

		//echo "$arr[$index]";
	}

?>

<html>
<head>
    <title>Jarvis</title>
    <link href="style2.css" rel="stylesheet" type="text/css">
    	<style type="text/css">
		#a1 {
    background-color: black;
    width: 400px;
    border: 25px blue;
    padding: 25px;
    margin: auto;
    text-align: center;
}
	#a2{
		font-size: 35px;
		color: white;
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
    	<li><a href="index.php"> TIMELINE </a></li>
        <li class="active"><a href=""> RECOMMEND </a></li>
        <li><a href="feedback.html"> FEEDBACK </a></li>
        <li><a href="index.php?logout='1'"> LOG OUT </a></li>

    </ul>    
        
    </div>
    
   <div id="a2">
	<p><center>
	THANK YOU FOR USING OUR RECOMMENDATION SYSTEM. </br>
	YOUR RECOMMENDED ELECTIVE IS 
	</center></p>
	</div>
	<div id="a1">
	<td><input type="text" size="50" value="<?php echo $arr[$index]?>"/></td>
	</div>
    
    </header>


        
</body>    
</html>

