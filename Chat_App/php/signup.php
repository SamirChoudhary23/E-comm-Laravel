<?php 
include("connection.php");
$name=$email=$phone=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if(!empty($name) && !empty($email) && !empty($phone) && !empty($password)){
		//insert data in database
		$sql="INSERT INTO users(name,email,phone,password,date)VALUES('$name','$email','$phone','$password',current_timestamp()) ";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "data inserted";
		}else{
			echo "data not inserted";
		}
	}else{
		echo "please fill from";
	}
?>