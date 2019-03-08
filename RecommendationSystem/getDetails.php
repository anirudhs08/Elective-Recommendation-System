<?php
	extract($_GET);
	// or $usn=$_GET["usn"]
	//but we will have to do this for all the variables which are sent
	//extract is easier to use
	// from the request, it will pull out all the fields that were sent and the corresponding variables will have the same name 
	// with which it was sent.


	//We have a variable called $usn created automatically

	$retstr = "";
	if(preg_match("/ECS/", $usn)){
		$retstr = "$usn;CSE";
	}
	else if(preg_match("/EEC/", $usn)){
		$retstr = "$usn;ECE";
	}
	else if(preg_match("/ECV/", $usn)){
		$retstr = "$usn;CV";
	}
	else if(preg_match("/EBT/", $usn)){
		$retstr = "$usn;BT";
	}
	else if(preg_match("/EEE/", $usn)){
		$retstr = "$usn;EE";
	}
	else if(preg_match("/EME/", $usn)){
		$retstr = "$usn;ME";
	}
	else 
		$retstr = "UNKNOWN;DEF";
	//from server send the string and also a code to trigger a function.
	echo "<script type = 'text/javascript'>";
	echo "parent.obj2.updateFields('$retstr');";//putting quotes for the parameter $retstr , as the variable is 	interpolated as a string , hence it is read as USN1;CSE;9.0 instead of "USN1;CSE;9.0";
	echo "</script>";
?>