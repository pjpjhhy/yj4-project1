import { sqlController } from "../sql/sqlController.js";

const isLogin = async () => {
  return fetch('../api/isLogin.php')
         .then(res => res.json())
         .then(data => data);
}

const paintLikedList = (data) => {
  const thumbnailBox = document.getElementsByClassName('thumbnail-box')[0];
  thumbnailBox.innerHTML = "";
  if(data.length > 0){
    data.forEach(item => {
      const card = document.createElement('a');
      card.classList.add('card');
      card.setAttribute('href', `../detail.php?code=${item.performance_code}`);

      const thumbnail = document.createElement('div');
      thumbnail.classList.add('thumbnail');
  
      const img = document.createElement('img');
      img.setAttribute('src', item.performance_poster_url);
      img.setAttribute('alt', `${item.performance_title} Poster`)
      thumbnail.appendChild(img);
  
      const showName = document.createElement('div');
      showName.classList.add('show-name');
      showName.innerText = item.performance_title;
  
      card.appendChild(thumbnail);
      card.appendChild(showName);
  
      thumbnailBox.appendChild(card);
    });
  } else {
    thumbnailBox.innerText = "데이터가 없습니다.";
  }
}

const sqlApi = async ( typeData, userId, updateValue, updateType ) => {
  const data = await sqlController({
    type: typeData,
    sql: {
      user_id: userId,
      update: updateValue,
      updateType: updateType
    }
  })
  if(updateValue !== "" && updateType !== "") {
    paintLikedList(data);
  }
}

const userId = await isLogin();

if(userId !== "") {
  sqlApi('view', userId);
}



const wrapper = document.getElementsByClassName('wrapper')[0];
const changeBtn = document.getElementsByClassName('change-info');
const background = document.getElementsByClassName('background')[0];
const closeBtn = document.querySelector('.modal-title svg');
const submitBtn = document.querySelector('.modal button')

const whatBox = (value) => {
  switch(value) {
    case "닉네임":
      return "name";
    case "비밀번호":
      return "password";
    case "이메일":
      return "email";
    default:
      break;
  }
}

for(const element of changeBtn) {
  element.addEventListener('click', () => {
    wrapper.classList.add('fixed');
    background.classList.remove('hidden');
    
    const h2 = document.querySelector('.modal-title h2');
    h2.innerText = element.innerText;
    const targetText = element.innerText.slice(0, -3)
    const value = whatBox(targetText);
    const inputBox = document.getElementsByClassName(`${value}-box`)[0];
    inputBox.classList.remove('hidden');
  });
}

closeBtn.addEventListener('click', () => {
  wrapper.classList.remove('fixed');
  background.classList.add('hidden');
  
  const inputBox = document.getElementsByClassName('input-box');
  for(const element of inputBox) {
    element.classList.add('hidden');
  }
})


const form = document.getElementsByTagName('form')[0];

form.addEventListener('submit', (e) => {
  const targetText = document.querySelector('.modal h2').innerText.slice(0, -3);
  const inputValue = document.getElementById(`${whatBox(targetText)}-change`).value;
  const pwCheckValue = document.getElementById('password-change-check').value;
  const socialType = document.getElementsByClassName("user-name")[0].children[0].innerText;
  e.preventDefault();


  if(inputValue === "") {
    alert(`새로운 ${targetText}를 입력해주세요.`);
  }else if(targetText === "비밀번호" && inputValue !== pwCheckValue){
    alert("비밀번호를 확인해주세요.");
  } else if(socialType !== "일반" && (targetText === "비밀번호" || targetText === "이메일") ) {
    alert(`소셜회원은 ${targetText}를 변경하실 수 없습니다.`);
  } else {
    form.submit();
  }

})