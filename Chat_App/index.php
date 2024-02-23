<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index page</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.container #respMsg{
			text-align: center;
	        font-family: verdana;
			font-size: 16px;
			
		}
	</style>
</head>
<body>
	<div class="container">
		<p id="respMsg">fill form</p>
		<form action="#">
			<div class="inputs">
				<label>Name</label><br>
			 	<input type="text" name="name">
			</div>
			<div class="inputs">
				<label>Email</label><br>
			 	<input type="email" name="email">
			</div>
			<div class="inputs">
				<label>Phone</label><br>
			 	<input type="text" name="phone">
			</div>
			<div class="inputs">
				<label>Password</label><br>
			 	<input type="password" name="password">
			</div>
			<div class="submit">
			<input type="submit" name="submit">
		</div>
		</form>
		<div class="already-reg">
			<p>Already registered? <a href="login.php">Login</a></p>
		</div>
	</div>

	<script src="js/signup.js"></script>
</body>
</html>