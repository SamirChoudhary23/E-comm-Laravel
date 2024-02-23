<?php 
	$con=new mysqli("localhost","root","","newChat");
	if($con){
		// echo "Connected successfully";
	}else{
		echo "Unable to connect".$con->connect_error;
		die();
	}
?>