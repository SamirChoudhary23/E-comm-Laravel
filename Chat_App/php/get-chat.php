<?php
session_start();
 include("connection.php");
 $outgoing_id=$_POST['outgoing_id'];
 $incoming_id=$_POST['incoming_id'];

 $output="";
 $sql=mysqli_query($con,"SELECT * FROM message WHERE (outgoing_id='{$outgoing_id}' AND incoming_id='{$incoming_id}') OR (outgoing_id='{$incoming_id}' AND incoming_id='{$outgoing_id}') ORDER BY sno DESC ");
 if(mysqli_num_rows($sql)>0){
 	while($row=mysqli_fetch_assoc($sql)){
 		if($row['outgoing_id']==$outgoing_id){
 			$output='<div class="outgoing">
					<p>
					'.$row['msg'].'
					<span>'.$row['date'].'</span>
					</p>
				</div>'.$output;
 		}else{
 			$output='<div class="incoming">
					<p>
					'.$row['msg'].'
					<span>'.$row['date'].'</span>
					</p>
				</div>'.$output;
 		}
 	}
 }
 echo $output;
 ?>