
function regValdiate(event) {

	var a=document.getElementById('fname').value;
	var b=document.getElementById('dob').value;
	var c=document.getElementById('username').value;
	var d=document.getElementById('password').value;

	var message="";


	if(a==""){

		message="Please fill all fields";

	}else if(b==""){

		message="Please fill all fields";

	}else if(c==""){

		message="Please fill all fields";

	}else if(d==""){

		message="Please fill all fields";

	}



	if(message==""){
		
		 
		return true;
		
	}else{
		

		document.getElementById('error_msg').innerHTML=message;
		event.preventDefault();
		 
		return false;
	}

}

function signInVal(event){


	var x=document.getElementById('username').value;
	var y=document.getElementById('password').value;

	var signMsg="";

	if(x==""){

		signMsg="Please fill all fields";

	}else if(y==""){

		signMsg="Please fill all fields";
	}


	if(signMsg==""){

		return true;

	}else{

		document.getElementById('sign_msg').innerHTML=signMsg;
		event.preventDefault();


		return false;

	}


}