const form=document.querySelector(".container .body .right .right-btm form"),
submitBtn=form.querySelector("button"),
inputField=document.querySelector(".right-btm form .inputField"),
chatBox=document.querySelector(".container .body .right .right-mid");


form.onsubmit=(e)=>{
	e.preventDefault();
	console.log("auto click");
	let xhr=new XMLHttpRequest();
	xhr.onload=()=>{
		if(xhr.readyState==4 && xhr.status==200){
			// console.log(xhr.response);
			inputField.value="";
			scrollDown();

		}
	}
	xhr.open("POST","php/insert-chat.php",true);
	let formData=new FormData(form);
	xhr.send(formData);
}

chatBox.onmouseenter=()=>{
	chatBox.classList.add("active");
}
chatBox.onmouseleave=()=>{
	chatBox.classList.remove("active");
}

setInterval(()=>{
	let xhr=new XMLHttpRequest();
	xhr.onload=()=>{
		if(xhr.readyState==4 && xhr.status==200){
			chatBox.innerHTML=xhr.response;
			
			if(!chatBox.classList.contains("active")){
				scrollDown();
			}
		}
	}
	xhr.open("POST","php/get-chat.php",true);
	let formData=new FormData(form);
	xhr.send(formData);

},500);

function scrollDown(){
	chatBox.scrollTop=chatBox.scrollHeight;
}