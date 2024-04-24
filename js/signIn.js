document.addEventListener("DOMContentLoaded", function() {
  const signInForm = document.querySelector(".sign-in-form");
  const idBox=document.querySelector(".id-box");
  const userIcon=document.querySelectorAll(".user1");
  const idInput = document.querySelector(".id");
  const passwordBox=document.querySelector(".password-box");
  const pwIcon=document.querySelector(".pw1")
  const passwordInput = document.querySelector(".password");
  const idError = document.querySelector(".id-error");
  const pwError = document.querySelector(".pw-error");

  signInForm.addEventListener("submit", function(event) {
    event.preventDefault();

    let errors=false;

    if(idInput.value===""){
      idError.style.display="block";
      errors=true;
    } else if(idInput.value !== ""&&passwordInput.value===""){
      idError.style.display="none";
      pwError.style.display="block";
      errors=true;
    } else {
      idError.style.display="none";
      pwError.style.display="none";
      signInForm.submit();
    }
  });

  //focus
  idInput.addEventListener("click", function() {
    idBox.classList.add("focus");
    userIcon.forEach(icon => {
      icon.style.stroke = "#000";
    });
  });
  passwordInput.addEventListener("click", function() {
    passwordBox.classList.add("focus");
    pwIcon.style.fill="#000";
  });
  idInput.addEventListener("blur", function() {
    idBox.classList.remove("focus");
    userIcon.forEach(icon => {
      icon.style.stroke = "#D9D9D9";
    });
  });
  passwordInput.addEventListener("blur", function() {
    passwordBox.classList.remove("focus");
    pwIcon.style.fill="#D9D9D9";
  });
});