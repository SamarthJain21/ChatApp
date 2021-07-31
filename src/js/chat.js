const form = document.querySelector(".typing-area"),
  inputField = form.querySelector(".input-field"),
  sendBtn = form.querySelector("button"),
  chatBox = document.querySelector(".chat-box");

  form.onsubmit = (e)=>{
    e.preventDefault();//prevents form from getting submitted
  }

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest(); //creates an XML object
  xhr.open("POST", "php/insertChataction.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value="";//clearing the text message area
        scrollToBottom();

      }
    }
  }
  //sending the form data to php through ajax
  let formData = new FormData(form); //form data object
  xhr.send(formData);
}
chatBox.onmouseenter = ()=>{
  chatBox.classList.add('active');
}
chatBox.onmouseleave = ()=>{
  chatBox.classList.remove('active');
}
setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/getChataction.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          chatBox.innerHTML = data;
          if(!chatBox.classList.contains("active")){
            scrollToBottom();//wont scroll down every 500ms

          }
        }
    }
  }
  let formData = new FormData(form); //form data object
  xhr.send(formData);
}, 500);

function scrollToBottom(){
  chatBox.scrollTop = chatBox.scrollHeight;
}
