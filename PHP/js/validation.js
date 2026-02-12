const email = document.querySelector("#email");
const erreurEmail = document.querySelector("#erreurEmail");
const emailLabel = document.querySelector("#emailLabel");
document.querySelector("#contact").addEventListener("submit", validationRegexEmail,true);
function validationRegexEmail(e) {
let regexEmail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,63})$/

if (regexEmail.test(email.value) == false) {
  e.preventDefault();
  erreurEmail.textContent = "Veuillez renseigner une email valide";
  email.className = "invalide";
  emailLabel.className = "label";
  email.focus();
  return false;
}
if (email.value == "") {
    e.preventDefault();
    erreurEmail.textContent = "Veuillez renseigner votre email";
    email.className = "invalide";
    emailLabel.className = "label";
    email.focus();
    return false;
}

}

email.addEventListener("blur", verifierEmail, true);
function verifierEmail() {
  if (email.value != "" ) {
    email.className = "valide";
    emailLabel.className = "labelOk";
    erreurEmail.textContent = "";
    return true;
  }
}


  
