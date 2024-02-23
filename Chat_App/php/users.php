<?php
session_start();
include("connection.php");
$outgoing_id=$_SESSION['unique_id']; 
$sql=mysqli_query($con,"SELECT * FROM users");
$output="";
if(mysqli_num_rows($sql)==1){
	$output="No users";
}else if(mysqli_num_rows($sql)>1){
	include("data.php");
}
echo $output;
?>