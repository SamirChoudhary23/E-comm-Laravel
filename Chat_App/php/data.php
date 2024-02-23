<?php
  while($row=mysqli_fetch_assoc($sql)){
  	$sql2="SELECT * FROM message WHERE (incoming_id='{$row['email']}' OR outgoing_id='{$row['email']}') AND (outgoing_id='$outgoing_id' OR incoming_id='$outgoing_id') ORDER BY sno DESC LIMIT 1";
  	$query2=mysqli_query($con,$sql2);
  	$row2=mysqli_fetch_assoc($query2);
  	if(mysqli_num_rows($query2)>0){
  		$result=$row2['msg'];
  	}else{
  		$result="No messages";
  	}

  	(strlen($result)>20 )? $msg=substr($result,0,20).'...':$msg=$result;
  	// ($outgoing_id==$row2['outgoing_id']) ? $you="You ":$you=" ";
  	//online-offlne code
  	($row['status']=="Online") ? $offline="#02a704":$offline="";


  	$output.='<a href="demo.php?user_id='.$row['email'].' ">
					<img src="user1.jpg">
					<div class="details">
					<span>'.$row['name'].'</span>
					<p>'. $msg.'</p>
					</div>
					<div class="status-dot" style="color:'.$offline.' "><i class="fas fa-circle"></i></div>
				</a>';
  }
?>