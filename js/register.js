var eye = document.getElementById("eye");
var password = document.getElementById("password");
var showPassword = false;

eye.addEventListener("click", function(){
	if(showPassword == false){
		password.setAttribute("type", "text");
		eye.classList.add("fa-eye-slash");
		eye.classList.remove("fa-eye");
		showPassword= true;
	}else{
		password.setAttribute("type", "password");
		eye.classList.remove("fa-eye-slash");
		eye.classList.add("fa-eye");
		showPassword= false;
	}
});


var eye1 = document.getElementById("eye1");
var password1 = document.getElementById("password1");
var showPassword1 = false;

eye1.addEventListener("click", function(){
	if(showPassword1 == false){
		password1.setAttribute("type", "text");
		eye1.classList.add("fa-eye-slash");
		eye1.classList.remove("fa-eye");
		showPassword1 = true;
	}else{
		password1.setAttribute("type", "password");
		eye1.classList.remove("fa-eye-slash");
		eye1.classList.add("fa-eye");
		showPassword1 = false;
	}
});
