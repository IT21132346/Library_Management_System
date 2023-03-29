function showpassword() {
  var x = document.getElementById("pswd1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


