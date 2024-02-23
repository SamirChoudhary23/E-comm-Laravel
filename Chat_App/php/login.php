<?php 
include("connection.php");
$email=$password="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email=test_input($_POST['email']);
    $password=test_input($_POST['password']);
}
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 $sql=mysqli_query($con,"SELECT email,password FROM users WHERE email='{$email}' AND password='{$password}' ");
 if(mysqli_num_rows($sql)>0){
 	session_start();
 	$_SESSION['unique_id']=$email;
 	 mysqli_query($con,"UPDATE users set status='Online' WHERE email='$email' ");

 }else{
 	echo "invalid";
 }
?>