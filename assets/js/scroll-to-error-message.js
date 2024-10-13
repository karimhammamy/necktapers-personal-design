var loginErrorMessage = document.getElementsByClassName ('login-error-message');
function scrollToErrorMessage(){
  for(loginErrorMessageIndex=0;loginErrorMessageIndex<loginErrorMessage.length;loginErrorMessageIndex++){
    loginErrorMessage[loginErrorMessageIndex].scrollIntoView(false);
  }
  
}
window.addEventListener('load',scrollToErrorMessage);