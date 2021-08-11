var userName = document.getElementById("username");
var email = document.getElementById("email");
var password = document.getElementById("password");
var input = document.getElementsByClassName("form-control");
var signuup = document.getElementById("sigup");
var myButton = document.getElementById('pass-show');
myButton.onclick = function (e) {
    e.preventDefault();
    if (this.textContent == 'Show Password') {
      this.textContent = 'Hide Password';
      password.setAttribute('type', 'text');
    } else {
      this.textContent = 'Show Password';
      password.setAttribute('type', 'password');
    }
  };
var logiPage = document.getElementById("logipage");
logiPage.addEventListener("click", logpage);
function logpage() {
    logiPage.href="index.html"
}
userdata = [];
signuup.addEventListener("click", sign);
if ((userName.value == "" || email.value == "" || password.value == "")) {
    document.getElementById('succ').innerHTML = '<span class="text-danger m-3">please,enter all input</span>'
}
function sign() {
    addData()
    reset()
    document.getElementById('succ').innerHTML = '<span class="text-success m-3">Sucsses</span>'

}


function addData() {
    var data = {
        name: userName.value,
        email: email.value,
        pass:password.value
    }
    userdata.push(data);
    localStorage.setItem("udata", JSON.stringify(userdata));
}
function reset() {
    for (var i = 0; i < input.length; i++){
        input[i].value=""
    }
}
var nameAlert=document.getElementById("nameAlert");
userName.onkeyup=function()
{
   var nameRejex=/^[A-Z][a-z]{2,12}$/;
   if(!nameRejex.test(userName.value))
   {
       userName.classList.add("is-invalid");
       userName.classList.remove("is-valid");
       nameAlert.classList.remove("d-none")
   }
   else{
      userName.classList.add("is-valid");
      userName.classList.remove("is-invalid");
      nameAlert.classList.add("d-none")

   }
}
var nameAlert=document.getElementById("nameAlert");
email.onkeyup=function()
{
    var regex = /^[a-z]{3,20}@[(gmail)|(yahoo)]{5}\..{3,7}$/
   if(!regex.test(email.value))
   {
       email.classList.add("is-invalid");
       email.classList.remove("is-valid");
       nameAlert.classList.remove("d-none")
   }
   else{
      email.classList.add("is-valid");
      email.classList.remove("is-invalid");
      nameAlert.classList.add("d-none")

   }
}
function validation() {
    var regex = /^[a-z]{3,20}@[(gmail)|(yahoo)]{5}\..{3,7}$/
    if (regex.test(email.value) == true) {
        email.classList.add("is-valid")
    }
    else {
        email.classList.add("is-invalid")
    }
}
email.addEventListener("blur",validation)