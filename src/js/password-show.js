const pwdField = document.querySelector(".form input[type='password']"),
toggleBtn= document.querySelector(".form .field .fa-eye");

toggleBtn.onclick = ()=>{
  if(pwdField.type=="password"){
    pwdField.type = "text";
    toggleBtn.classList.add("active");
  }
  else{
    pwdField.type = "password";
    toggleBtn.classList.remove("active");

  }
}
