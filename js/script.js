function afficheMDP(){
  var password = document.getElementById("password");
  var password1 = document.getElementById("password1");
  if(password.type == "password" & password1.type == "password"){
    password.type = "text";
    password1.type = "text";
  }
  else {
    password.type = "password";
    password1.type = "password";
  }
}
