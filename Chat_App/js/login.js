const form=document.querySelector(".container form"),
submitBtn=document.querySelector(".container .submit input");

form.onsubmit= (e)=>{
	e.preventDefault();
}

submitBtn.onclick=()=>{
	let xhttp=new XMLHttpRequest();

	xhttp.onload=()=>{
		if(xhttp.readyState==4 && xhttp.status==200){
			console.log(xhttp.response);
			location.href="demo.php";
		}
	}


	xhttp.open("post","php/login.php",true);
	let formData=new FormData(form);
	xhttp.send(formData);
};