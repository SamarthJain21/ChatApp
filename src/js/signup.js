const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
  e.preventDefault();//prevents form from getting submitted
}

continueBtn.onclick=()=>{
  let xhr = new XMLHttpRequest(); //creates an XML object
  xhr.open("POST","php/signupaction.php",true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status===200){
      let data=xhr.response;
      if(data == "success"){
        location.href="users.php";
      }else{

        errorTxt.textContent = data;
        errorTxt.style.display = "block";
      }
    }
}
  }
  //sending signup form data to php through ajax
  let formData = new FormData(form); //form data object
  xhr.send(formData);
}
