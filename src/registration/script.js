//IT23237636 Nujaba MIF
//check if both password is matched
function checkpassword(){
	if(document.getElementById("psw").value != document.getElementById("repsw").value){
		alert("Password Mismatch!");
		return false;
	}
	else {
		alert("Welcome to SmartPark!");
		return true;
	}
}

//to enable submit once the terms and condition is checked
function enablebutton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitbtn").disabled=false;
	}
	else{
		document.getElementById("submitbtn").disabled=true;
	}
}

function forgotpassword(){
	if(document.getElementById("forgot-psw").value != document.getElementById("confirm-psw").value){
		alert("Password Mismatch!");
		return false;
	}
	else {
		alert("Password successfully updated!");
		return true;
	}
}
			
function updatepassword(){
	if(document.getElementById("old-psw").value == document.getElementById("forgot-psw").value){
		alert("Old and New password cannot be the same!");
		return false;
	}
	else if(document.getElementById("forgot-psw").value != document.getElementById("confirm-psw").value){
		alert("Password Mismatch!");
		return false;
	}
	else {
		alert("Password successfully updated!");
		return true;
	}
}

// confirm message before deleting the account
function delete_account(event){
	if (!confirm("Are you sure you want to delete your account? This action cannot be undone.")) {
		event.preventDefault(); // Prevent form submission
	}
} 
