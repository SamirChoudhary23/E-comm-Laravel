<?php 
include("connection.php");
$outgoing_id=$incoming_id=$msg;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$outgoing_id=$_POST['outgoing_id'];
	$incoming_id=$_POST['incoming_id'];
	$msg=$_POST['msg'];
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(!empty($msg)){
	$sql=mysqli_query($con,"INSERT INTO message(outgoing_id,incoming_id,msg,date) VALUES('{$outgoing_id}','{$incoming_id}','{$msg}',current_timestamp())");
    }
?>