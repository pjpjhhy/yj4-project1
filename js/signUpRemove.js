// 아이디
document.addEventListener("DOMContentLoaded", function() {
  const idInput = document.querySelector(".id");
  const userIdError = document.querySelector(".userid-error");
  const idInputBox = document.querySelector(".id-box");
  const userIcon = document.querySelectorAll(".user1");

  idInput.addEventListener("input", function() {
    if (idInput.value !== "") {
      idInputBox.classList.remove("error");
      idInput.classList.remove("error-color");
      userIdError.style.display = "none";
      userIcon.forEach(icon => {
        icon.style.stroke = "#000";
      });
    } else {
      idInputBox.classList.add("error");
      idInput.classList.add("error-color");
      userIdError.style.display = "block";
      userIcon.forEach(icon => {
          icon.style.stroke = "red";
      });
    }
  });
  //focus 제거
  idInput.addEventListener("blur", function() {
    idInputBox.classList.remove("focus");
    userIcon.forEach(icon => {
    });
  });
});


// 비밀번호
document.addEventListener("DOMContentLoaded", function() {
  const passwordInput = document.querySelector(".password");
  const userPwError = document.querySelector(".userpw-error");
  const passwordBox=document.querySelector(".password-box");
  const pwIcon=document.querySelector(".pw1");
  
  passwordInput.addEventListener("input", function() {
    if (passwordInput.value !== "") {
      passwordBox.classList.remove("error");
      passwordInput.classList.remove("error-color");
      userPwError.style.display = "none";
      pwIcon.style.fill="#000";
      } else {
        passwordBox.classList.add("error");
        passwordInput.classList.add("error-color");
        userPwError.style.display = "block";
        pwIcon.style.fill="red";
      }
  });
  //focus 제거
  passwordInput.addEventListener("blur", function() {
    passwordBox.classList.remove("focus");
  });
});

// 비밀번호 확인
document.addEventListener("DOMContentLoaded", function() {
  const passwordInput = document.querySelector(".password");
  const password2Input = document.querySelector(".password2");
  const unmatchPwError = document.querySelector(".unmatch-pw");
  const password2Box=document.querySelector(".password-box2");
  const pwIcon2=document.querySelector(".pw2");
  
  password2Input.addEventListener("input", function() {
    if (password2Input.value !== "" && passwordInput.value == password2Input.value) {
      password2Box.classList.remove("error");
      password2Input.classList.remove("error-color");
      unmatchPwError.style.display = "none";
    } else if(password2Input.value !== "") {
      pwIcon2.style.fill="#000";
      password2Input.classList.remove("error-color");
    } else {
      password2Box.classList.add("error");
      password2Input.classList.add("error-color");
      unmatchPwError.style.display = "block";
      pwIcon2.style.fill="red";
    }
  });
  //focus 제거
  password2Input.addEventListener("blur", function() {
    password2Box.classList.remove("focus");
  });
});

// 이메일
document.addEventListener("DOMContentLoaded", function() {
  const emailInput = document.querySelector(".email");
  const emailBox=document.querySelector(".email-box");
  const userMailError = document.querySelector(".usermail-error");
  const emailIcon=document.querySelector(".mail");

  emailInput.addEventListener("input", function() {
    if (emailInput.value !== "") {
      emailBox.classList.remove("error");
      emailInput.classList.remove("error-color");
      userMailError.style.display = "none";
      emailIcon.style.fill="#000";
    } else {
      emailBox.classList.add("error");
      emailInput.classList.add("error-color");
      userMailError.style.display = "block";
      emailIcon.style.fill="red";
    }
  });
  //focus 제거
  emailInput.addEventListener("blur", function() {
    emailBox.classList.remove("focus");
  });
});

// 닉네임
document.addEventListener("DOMContentLoaded", function() {
  const nameInput = document.querySelector(".name");
  const userNickError = document.querySelector(".usernick-error");
  const nameBox= document.querySelector(".name-box");
  const userIcon2=document.querySelectorAll(".user2")

  nameInput.addEventListener("input", function() {
    if (nameInput.value !== "") {
      nameBox.classList.remove("error");
      nameInput.classList.remove("error-color");
      userNickError.style.display = "none";
      userIcon2.forEach(icon => {
        icon.style.stroke = "#000";
      });
    } else {
      nameBox.classList.add("error");
      nameInput.classList.add("error-color");
      userNickError.style.display = "block";
      userIcon2.forEach(icon => {
        icon.style.stroke = "red";
      });
    }
  });
  //focus 제거
  nameInput.addEventListener("blur", function() {
    nameBox.classList.remove("focus");
  });
});