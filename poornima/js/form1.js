function matchPassword() {  
  var pw1 = document.getElementById("pswd1");  
  var pw2 = document.getElementById("pswd2");  
  if(pw1 = pw2)  
  {   
     alert("Passwords  match"); 
	  return true;
    
  } 
  else{
	  
	  alert("Passwords did not match"); 
	return false;
  }
}
