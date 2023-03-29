function matchPassword() {  
  var password = document.getElementById("create_pw").value;
        var confirmPassword = document.getElementById("renter_pw").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
}

