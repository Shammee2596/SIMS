function validateForm(){

	var name    	=   document.forms['bmForm']['name'].value;
	var designation = 	document.forms['bmForm']['designation'].value;
	var dept 		= 	document.forms['bmForm']['dept'].value;
	var email 		= 	document.forms['bmForm']['email'].value;
	var position 	= 	document.forms['bmForm']['position'].value;
	var username    =   document.forms['bmForm']['username'].value;
	var password    =   document.forms['bmForm']['password'].value;
    var confirmPassword = document.forms['bmForm']['conPassword'].value;
   
    var isError = 0;
    document.getElementById("name-alert").innerHTML			 = "";
    document.getElementById("designation-alert").innerHTML 	 = "";
    document.getElementById("dept-alert").innerHTML 		 = "";
    document.getElementById("email-alert").innerHTML 		 = "";
    document.getElementById("position-alert").innerHTML      = "";
    document.getElementById("username-alert").innerHTML 	 = "";
    document.getElementById("password-alert").innerHTML      = "";
    document.getElementById("conPassword-alert").innerHTML   = "";

    var isemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    
    if(name == "" || name == null){
        document.getElementById("name-alert").innerHTML="Please fill the name field";
        isError=1;
    }

    if(designation == "" || designation == null){
        document.getElementById("designation-alert").innerHTML="Please Select Designation";
        isError=1;
    }
    if(dept =="" || dept == null){
        document.getElementById("dept-alert").innerHTML = "Select department";
        isError =1;
    }

    if(email == "" || email == null){
        document.getElementById("email-alert").innerHTML="Please fill the email field";
        isError=1;
    }else if(!isemail){
        document.getElementById("email-alert").innerHTML="Enter a valid email";
        isError=1;
    }

    if(position == "" || position == null){
        document.getElementById("position-alert").innerHTML="Select Hall Position";
        isError=1;
    }

    if(username == "" || username == null){
        document.getElementById("username-alert").innerHTML="Please fill the username field";
        isError=1;
    }else if(username.length <4){
        document.getElementById("username-alert").innerHTML="username should be atleast 4 charecters";
        isError=1;
    }

    if(password == "" || password == null){
        document.getElementById("password-alert").innerHTML="Please fill the password field";
        isError=1;
    }else if(password.length > 15){
        document.getElementById("password-alert").innerHTML="password can not be greater than 15 charecters";
        isError=1;
    }


    if(confirmPassword =="" || confirmPassword == null){
        document.getElementById("conPassword-alert").innerHTML="Please confirm the password";
        isError=1;
    }else if(password != confirmPassword){
        document.getElementById("conPassword-alert").innerHTML="Password didn't match";
        isError=1;
    }

    if(isError == 1){
        return false;
    }else{
     return true;   
    }

}

