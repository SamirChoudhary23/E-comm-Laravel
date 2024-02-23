let formElement=document.querySelector("form");
formElement.addEventListener('submit',(event)=>{
	event.preventDefault();
	console.log("hey");

	let xhttp=new XMLHttpRequest();

	let formData=new FormData(formElement);
	xhttp.open("POST","php/signup.php",true);
	xhttp.send(formData);

		xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("respMsg").innerHTML = this.responseText;
       }
     };
});
	

