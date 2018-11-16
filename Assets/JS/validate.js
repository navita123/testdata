function contact(){
 
 /*var captcha=document.getElementById('captcha').value;*/
 if(document.getElementById("yournameId").value==''){
	alert("Please enter your name.");
	document.getElementById("yournameId").focus();												
    return false;
}

if(document.getElementById("exampleInputEmail1").value==''){																		
	alert("Please enter your email address.");
	document.getElementById("exampleInputEmail1").focus();
	return false;
}

var email= document.getElementById("exampleInputEmail1").value;
if(email !=""){
	var atpos = email.indexOf("@");
	var dotpos = email.indexOf(".");
	if(atpos ==-1 || dotpos ==-1){
		alert("Please enter a valid email address.");
		document.contact_form.email.focus();
		document.contact_form.email.value = "";
		return false;
	}
}

if(document.getElementById("yourPhoneNo").value==''){
	alert("Please enter your contact no.");
	document.getElementById("yourPhoneNo").focus();
	return false;
}
if(isNaN(document.getElementById("yourPhoneNo").value)){
	alert("Please enter your contact no.");
	document.getElementById("yourPhoneNo").value="";
	document.getElementById("yourPhoneNo").focus();
	return false;
}
	
if(document.contact_form.message.value==''){
		alert("Please enter your enquiry.");
		document.getElementById("enquiryId").focus();
		return false;
	}
	
	/*if(captcha=='')
	{
	alert ("Please enter verification code.");
	document.getElementById('captcha').focus();
	return false;
	}*/
	document.contact_form.submit();
}