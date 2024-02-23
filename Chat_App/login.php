<?php 
session_start();
include("php/connection.php");
if(isset($_SESSION['unique_id'])){
	mysqli_query($con,"UPDATE users set status='Offline' WHERE email='{$_SESSION['unique_id']}' ");
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<form action="#">
		<div class="inputs">
			<label>Email</label><br>
			<input type="email" name="email">
		</div>
		<div class="inputs">
			<label>Password</label><br>
		 	<input type="password" name="password">
		</div>
		<div class="submit">
		<input type="submit" name="submit">
		</div>
		<p>Haven't created account? <a href="index.php">Signup now</a></p>
	</form>
</div>
<script src="js/login.js"></script>

</body>
</html>