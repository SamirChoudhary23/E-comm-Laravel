<?php
session_start();
if(!isset($_SESSION['unique_id'])){
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>demo</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="demo-style.css">
	
</head>
<body>
	<?php
	include("php/connection.php");
	$sql=mysqli_query($con,"SELECT * FROM users where email='{$_SESSION['unique_id']}' ");
	$row=mysqli_fetch_assoc($sql);
	 ?>
<div class="container">
	<div class="header">
		<div>
		<img src="user1.jpg" width="50">
		<span><?php echo $row['name']; ?></span>
	    </div>
	    <!-- <div class="spinner">
	    </div> -->
		<a href="login.php" >Logout</a>
		
	</div>
	<div class="body">
		<div class="left">
			<div class="search">
				<input type="search" name="search" placeholder="search name or email">
				<button><i class="fas fa-search"></i></button>
			</div>
			<div class="users">
				<!-- <a href="#">
					<img src="user1.jpg">
					<div class="details">
					<span>samir</span>
					<p>last message last</p>
					</div>
				</a> -->
			</div>
		</div>
		<?php if(isset($_GET['user_id'])){

	    ?>
		<div class="right">
			<div class="right-top">
				<?php 
				$sql=mysqli_query($con,"SELECT * FROM users WHERE email='{$_GET['user_id']}' ");
					if(mysqli_num_rows($sql)>0){
					$row=mysqli_fetch_assoc($sql);
					}
					$userName="";
					if($row['email']==$_SESSION['unique_id']){
						$userName="You";
					}else{
						$userName=$row['name'];
					}
				 ?>
				<img src="user1.jpg" width="50">
				<span><?php echo $userName; ?></span>
			</div>
			<div class="right-mid">
				<!-- <div class="outgoing">
					<p>
					Hii
					<span>time</span>
					</p>
				</div> -->
				<!-- <div class="incoming">
					<p>
					Hello
					<span>time</span>
					</p>
				</div> -->
			</div>
			<div class="right-btm">
			<form action="#" autocomplete="off">
				<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?> " hidden>
				<input type="text" name="incoming_id" value="<?php echo $_GET['user_id']; ?> " hidden>
				<input type="text" name="msg" class="inputField" placeholder="Type message here">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>
			</div>
		</div>
	<?php }else{ ?>
		
		<div class="select-user">
			<div class="design">
				<p><img src="hello.png" width="210"></p>
				<p>Select user to start chat</p>
			</div>
			
		</div>
	<?php } ?>
	</div>
</div>
<?php
$sql=mysqli_query($con,"SELECT * FROM users");
$row=mysqli_fetch_assoc($sql);
if($row['status']=="Offline"){
echo '<script>
console.log("offline 0");
 document.getElementById("status").style.background="red";
 console.log("offline 2"); 
 </script>';
}
?>
 

<script src="js/user.js"></script>
<script src="js/chat.js"></script>

</body>
</html>