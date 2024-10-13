//find appointments button js
findAppointmentsButton = document.getElementById('find-appointments-button-id');
function mouseoverFindAppointmentsButton(){
  findAppointmentsButton.style.transition="0.5s";
  findAppointmentsButton.style.backgroundColor="#ffc107";
  findAppointmentsButton.style.color="#1d2434";
}
function mouseoutFindAppointmentsButton(){
  findAppointmentsButton.style.transition="0.5s";
  findAppointmentsButton.style.backgroundColor="#1d2434";
  findAppointmentsButton.style.color="#e5e5e5";
}
findAppointmentsButton.addEventListener('mouseover',mouseoverFindAppointmentsButton);
findAppointmentsButton.addEventListener('mouseout',mouseoutFindAppointmentsButton);
//show all appointments button js
showAllAppointmentsButton = document.getElementById('show-all-appointments-button-id');
function mouseoverShowAllAppointmentsButton(){
  showAllAppointmentsButton.style.transition="0.5s";
  showAllAppointmentsButton.style.backgroundColor="#ffc107";
  showAllAppointmentsButton.style.color="#1d2434";
}
function mouseoutShowAllAppointmentsButton(){
  showAllAppointmentsButton.style.transition="0.5s";
  showAllAppointmentsButton.style.backgroundColor="#1d2434";
  showAllAppointmentsButton.style.color="#e5e5e5";
}
showAllAppointmentsButton.addEventListener('mouseover',mouseoverShowAllAppointmentsButton);
showAllAppointmentsButton.addEventListener('mouseout',mouseoutShowAllAppointmentsButton);
//logout button js
logoutButton = document.getElementById('logout-button-id');
function mouseoverLogoutButton(){
  logoutButton.style.transition="0.5s";
  logoutButton.style.backgroundColor="#ffc107";
  logoutButton.style.color="#1d2434";
}
function mouseoutLogoutButton(){
  logoutButton.style.transition="0.5s";
  logoutButton.style.backgroundColor="#e5e5e5";
  logoutButton.style.color="#1d2434";
}
logoutButton.addEventListener('mouseover',mouseoverLogoutButton);
logoutButton.addEventListener('mouseout',mouseoutLogoutButton);
//make appointment button js
mainAppointmentButton = document.getElementById('main-appointment-button-id');
function mouseoverAppointmentButton(){
  mainAppointmentButton.style.transition="0.5s";
  mainAppointmentButton.style.backgroundColor="#ffc107";
  mainAppointmentButton.style.color="#1d2434";
}
function mouseoutAppointmentButton(){
  mainAppointmentButton.style.transition="0.5s";
  mainAppointmentButton.style.backgroundColor="#1d2434";
  mainAppointmentButton.style.color="#ffffff";
}
mainAppointmentButton.addEventListener('mouseover',mouseoverAppointmentButton);
mainAppointmentButton.addEventListener('mouseout',mouseoutAppointmentButton);

//change appointment button js
changeAppointmentButton = document.getElementById('change-appointment-button-id');
function mouseoverChangeAppointmentButton(){
  changeAppointmentButton.style.transition="0.5s";
  changeAppointmentButton.style.backgroundColor="#ffc107";
  changeAppointmentButton.style.color="#1d2434";
}
function mouseoutChangeAppointmentButton(){
  changeAppointmentButton.style.transition="0.5s";
  changeAppointmentButton.style.backgroundColor="#1d2434";
  changeAppointmentButton.style.color="#ffffff";
}
changeAppointmentButton.addEventListener('mouseover',mouseoverChangeAppointmentButton);
changeAppointmentButton.addEventListener('mouseout',mouseoutChangeAppointmentButton);

//delete appointment button js
deleteAppointmentButton = document.getElementById('delete-appointment-button-id');
function mouseoverDeleteAppointmentButton(){
  deleteAppointmentButton.style.transition="0.5s";
  deleteAppointmentButton.style.backgroundColor="#ffc107";
  deleteAppointmentButton.style.color="#1d2434";
}
function mouseoutDeleteAppointmentButton(){
  deleteAppointmentButton.style.transition="0.5s";
  deleteAppointmentButton.style.backgroundColor="#1d2434";
  deleteAppointmentButton.style.color="#ffffff";
}
deleteAppointmentButton.addEventListener('mouseover',mouseoverDeleteAppointmentButton);
deleteAppointmentButton.addEventListener('mouseout',mouseoutDeleteAppointmentButton);

//yes-no-delete appointment buttons js
yesNoDeleteAppointmentButtons = document.getElementsByClassName('yes-no-delete-appointment-buttons');
function mouseoverYesNoDeleteAppointmentButtons(){
  for(buttonIndex=0;buttonIndex<=yesNoDeleteAppointmentButtons.length;buttonIndex++){
    this.style.transition="0.5s";
    this.style.backgroundColor="#ffc107";
    this.style.color="#1d2434";
  }
}
function mouseoutYesNoDeleteAppointmentButtons(){
  for(buttonIndex=0;buttonIndex<=yesNoDeleteAppointmentButtons.length;buttonIndex++){
    this.style.transition="0.5s";
    this.style.backgroundColor="#1d2434";
    this.style.color="#ffffff";
  }
}
for(buttonIndex=0;buttonIndex<=yesNoDeleteAppointmentButtons.length;buttonIndex++){
  yesNoDeleteAppointmentButtons[buttonIndex].addEventListener('mouseover',mouseoverYesNoDeleteAppointmentButtons);
  yesNoDeleteAppointmentButtons[buttonIndex].addEventListener('mouseout',mouseoutYesNoDeleteAppointmentButtons);
}


