import { sqlController } from "../sql/sqlController.js";

document.addEventListener("DOMContentLoaded", function() {
  const signUpForm = document.querySelector(".sign-up-form");
  const passwordInput = document.querySelector(".password");
  const passwordBox=document.querySelector(".password-box")
  const password2Input = document.querySelector(".password2");
  const password2Box = document.querySelector(".password-box2");
  const idInput = document.querySelector(".id");
  const idInputBox=document.querySelector(".id-box")
  const emailInput = document.querySelector(".email");
  const emailBox=document.querySelector(".email-box");
  const nameInput = document.querySelector(".name");
  const nameBox= document.querySelector(".name-box");
  const userIdError = document.querySelector(".userid-error");
  const userPwError = document.querySelector(".userpw-error");
  const unmatchPwError = document.querySelector(".unmatch-pw");
  const userMailError = document.querySelector(".usermail-error");
  const userNickError = document.querySelector(".usernick-error");
  const userIcon = document.querySelectorAll(" .user1");
  const pwIcon=document.querySelector(".pw1");
  const emailIcon=document.querySelector(".mail");
  const pwIcon2=document.querySelector(".pw2");
  const userIcon2=document.querySelectorAll(".user2");
  // const icon=document.querySelectorAll("i");
  // console.log(icon)

  let errors=false
  let isCheck = {
    id: false,
    email: false,
  }

  const checkIdOrEmail = async (typeData, inputValue, valueType) => {
    

    let data;
    if(valueType === "아이디") {
      data =  await sqlController({
        type: typeData,
        sql: `select id from member where id='${inputValue}'`,
      })
    } else if(valueType === "이메일") {
      data =  await sqlController({
        type: typeData,
        sql: `select email from member where email='${inputValue}'`,
      })
    }

    if(data === false) {
      alert(`중복된 ${valueType}입니다.`);
      errors=true

      if(valueType === "아이디") {
        userIdError.style.display = "block";
        idInputBox.classList.add("error");
        idInput.classList.add("error-color");
        userIcon.forEach(icon => {
          icon.style.stroke = "red";
        });
        idInputBox.classList.remove("focus");
      } else if(valueType === "이메일") {
        userMailError.style.display = "block";
        emailBox.classList.add("error");
        emailInput.classList.add("error-color")
        emailIcon.style.fill="red";
        emailBox.classList.remove("focus");
      }
    } else {
      alert(`사용가능한 ${valueType}입니다.`)
      if(valueType === "아이디") {
        isCheck.id = true;
      } else if(valueType === "이메일") {
        isCheck.email = true;
      }
    } 
  }


  const idCheckbutton = document.getElementsByClassName('check-button')[0];
  idCheckbutton.addEventListener('click', (e) => {
    e.preventDefault();
    checkIdOrEmail('check', idInput.value, "아이디");
  })

  const emailCheckbutton = document.getElementsByClassName('check-button')[1];
  emailCheckbutton.addEventListener('click', (e) => {
    e.preventDefault();
    checkIdOrEmail('check', emailInput.value, "이메일");
  })

  
  

  signUpForm.addEventListener("submit", function(event) {
    event.preventDefault();

    // let errors=false

    if (passwordInput.value !== password2Input.value) {
      unmatchPwError.style.display = "block";
      password2Box.classList.add("error")
      password2Input.classList.add("error-color")
      pwIcon2.style.fill="red";
      password2Box.classList.remove("focus");
      errors=true
    } else {
      unmatchPwError.style.display = "none";
    }

    if (idInput.value === "") {
      userIdError.style.display = "block";
      idInputBox.classList.add("error");
      idInput.classList.add("error-color");
      userIcon.forEach(icon => {
        icon.style.stroke = "red";
      });
      idInputBox.classList.remove("focus");
      errors=true
    } else {
      userIdError.style.display = "none";
    }

    if (passwordInput.value === "") {
      userPwError.style.display = "block";
      passwordBox.classList.add("error");
      passwordInput.classList.add("error-color")
      pwIcon.style.fill="red";
      passwordBox.classList.remove("focus");
      errors=true
    } else {
      userPwError.style.display = "none";
    }

    if (password2Input.value === "") {
      password2Box.classList.add("error");
      password2Input.classList.add("error-color")
      pwIcon2.style.fill="red";
      password2Box.classList.remove("focus");
      errors=true
    }

    if (emailInput.value === "") {
      userMailError.style.display = "block";
      emailBox.classList.add("error");
      emailInput.classList.add("error-color")
      emailIcon.style.fill="red";
      emailBox.classList.remove("focus");
      errors=true
    } else {
      userMailError.style.display = "none";
    }

    if (nameInput.value === "") {
      userNickError.style.display = "block";
      nameBox.classList.add("error");
      nameInput.classList.add("error-color")
      userIcon2.forEach(icon => {
        icon.style.stroke = "red";
      });
      nameBox.classList.remove("focus");
      errors=true
    } else {
      userNickError.style.display = "none";
    }
    
    if(isCheck.id === true && isCheck.email === true){
      errors === true;
      if (!errors){
        signUpForm.submit();

        alert("회원가입이 완료되었습니다!");
      }
    } else {
      alert("중복체크 해주세요!")
    }

  });


  //focus 
  //아이디
  idInput.addEventListener("click", function() {
    idInputBox.classList.add("focus");
  });
  
  //비밀번호
  passwordInput.addEventListener("click", function() {
    passwordBox.classList.add("focus");
  });
  //비밀번호 확인
  password2Input.addEventListener("click", function() {
    password2Box.classList.add("focus");
  });
  //이메일
  emailInput.addEventListener("click", function() {
    emailBox.classList.add("focus");
  });
  //닉네임
  nameInput.addEventListener("click", function() {
    nameBox.classList.add("focus");
  });
});