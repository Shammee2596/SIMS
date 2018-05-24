function validateLoginForm(){
		
	document.getElementById("username-alert").innerHTML= "";
	document.getElementById("password-alert").innerHTML= "";
	var userName="";  	
  	var password="";
	userName=document.forms["loginForm"]["username"].value;
	password=document.forms["loginForm"]["password"].value;
	
	var isError=0;

	if(userName == "" || userName == null){
        document.getElementById("username-alert").innerHTML="Please fill the username field";
        isError=1;
    }

	if(password =="" || password == null){
		document.getElementById("password-alert").innerHTML="Please fill the password field";
		isError=1;
	}

	if(isError==1){
		return false;
	}

	return true;
/*re = /^[a-zA-Z_]{5,}$/; //5 or more chars
	if(!re.test(username)){
		document.getElementById("username-alert").innerHTML=" username field";
		isError =1;
	}*/
} 