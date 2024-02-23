let userList=document.querySelector(".container .body .left .users");
setInterval(()=>{
	let xhr=new XMLHttpRequest();

	xhr.onload=()=>{
		if(xhr.readyState==4 && xhr.status==200){
			userList.innerHTML=xhr.response;
		}
	}

	xhr.open("GET","php/users.php",true);
	xhr.send();
},500);