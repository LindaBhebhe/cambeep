

/*function to validate the login page
   prompts user to enter details if not completed
*/
/*function validatelogin(){
 
	var uname = document.getElementById("username");
	var password = document.getElementById("password");
	var usererror = document.getElementById("usererror");
	var passerror = document.getElementById("passerror");
	
	if(uname.value==""){
		usererror.innerHTML = "Enter your username";
	}	
	if(password.value==""){
		passerror.innerHTML = "Enter your password";
	}
}*/	

//function to validate the login
function validateloginjs(){

	//get username input and error message 
	var username = document.getElementById('username');
	var username_error = document.getElementById("username_error");
    var checked = true;

    //get password input and error message
	var password = document.getElementById('password');	
	var password_error = document.getElementById("password_error");

	//validating username 
	//check if the username input is empty
	if(username.value === "")
	{    
		 checked = false;
	    username_error.innerHTML = "Enter username";
	}
	

	//validating password
	//check if the password input is empty
	if (password.value === "")
	{
		 checked = false;
	    password_error.innerHTML = "Enter password";
	}
	

	if (checked ==true){
		loginAsUser();
		return true;
	}else{
		return false;
	}

	//function fail(){
	//password_error.innerHTML = "Wrong password";
	
    //}
}

//function to validate the login
function validateSupportForm(){
	alert("in the validate form");
	console.log("in the validate method");

	//get username input and error message 
	var message = document.getElementById('message');
	console.log(message);
	var message_error = document.getElementById("message_error");
    var checked = true;

    //get password input and error message
	var requester = document.getElementById('requestBy');	
	var request_error = document.getElementById("request_error");

	var status = document.getElementById('status');	
	var status_error = document.getElementById("status_error");

	//validating username 
	//check if the username input is empty
	if(message.value === "")
	{    
		 checked = false;
	    message_error.innerHTML = "Enter username";
	}
	

	//validating password
	//check if the password input is empty
	/*if (requester.value === "")
	{
		 checked = false;
         request_error.innerHTML = "Enter psassword";
	}*/

	if (status.value === "") //fix this
	{
		 checked = false;
         message_error.innerHTML = "Select status";
	}
	

	if (checked ==true){
		sendForm();
		return true;
	}else{
		return false;
	}

	
}

function sendForm(){
	console.log("in the send form function ");
	//console.log("in the loginAsUser function");
	var msg= document.getElementById('message').value;
	var req= document.getElementById('requester').value;
	var status= document.getElementById('status').value;

	console.log(msg);
	console.log(req);

	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
                 console.log("in the on readyState");
				if (this.readyState == 4 && this.status == 200) {
				  //direct based on who logged in 					
					if (this.responseText == "successful"){
                        //window.location.href = "ITadminHome.html";
                        alert("Request sent to IT");
                     }

                }
        };
          

          //call the send to the php file on the server 
		 // xhttp.open("GET", "https://watchmeorg.000webhostapp.com/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/sendSupport.php?message="+msg+"&status="+status, true);		  
		  xhttp.send();


}





function loginAsUser(){
	console.log("in the login as user function ")
	//console.log("in the loginAsUser function");
	var usern= document.getElementById('username').value;
	var pass= document.getElementById('password').value;

	console.log(usern);
	console.log(pass);

	if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();
				} else {
			
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() {
                 console.log("in the on readyState");
				if (this.readyState == 4 && this.status == 200) {
				  //direct based on who logged in 					
					if (this.responseText == "successful1"){
                        window.location.href = "ITadminHome.html";
                     }
                     else if(this.responseText == "successful2") {
                     	//alert("in the else statement");
                     	window.location.href = "home.html";
                     }
                      else if(this.responseText == "successful3") {
                     	window.location.href = "adminHome.html";
                     }

                }
        };
          

          //call the send to the php file on the server 
		 // xhttp.open("GET", "https://watchmeorg.000webhostapp.com/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.open("GET", "http://localhost:81/cambeep/model/cambeeplogin.php?username="+usern+"&password="+pass, true);		  
		  xhttp.send();
		}




	