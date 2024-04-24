import { sqlController } from "../sql/sqlController.js";

const idFindEmail = document.getElementById('id-find-email');
const pwFindEmail = document.getElementById('pw-find-email');
const pwFindId = document.getElementById('pw-find-id');
const idFindBtn = document.getElementsByClassName('find-btn')[0];
const pwFindBtn = document.getElementsByClassName('find-btn')[1];

const findApi = async (typeData, emailData, idData) => {
  const findData = await sqlController({
    type: typeData,
    sql: {
      email: emailData,
      id: idData,
    },
  });
  console.log(findData.type);
  if(findData.type === "nope") {
    alert("등록되지 않은 이메일입니다.")
  } else if(findData.type === "id") {
    alert(`아이디는 ${findData.id}입니다.`)
  } else if(findData.type === "password") {
    alert(`비밀번호는 ${findData.password}입니다.`)
  }
}

idFindBtn.addEventListener('click', () => {
  if(idFindEmail.value === "") {
    alert("이메일을 입력해주세요.");
  } else {
    findApi('find', idFindEmail.value, "");
  }
})
pwFindBtn.addEventListener('click', () => {
  if(pwFindEmail.value === ""){
    alert("이메일을 입력해주세요.");
  } else if(pwFindId.value === "") {
    alert("아이디를 입력해주세요.");
  } else {
    findApi('find', pwFindEmail.value, pwFindId.value);
  }
})
