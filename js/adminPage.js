import { sqlController } from "../sql/sqlController.js";

const mobileMember = document.getElementsByClassName('member')[0];


// 모바일전용 회원 테이블 조회
const forMobile = await sqlController({
  type: "look",
  sql: 'select uid, id from member order by uid desc',
});

forMobile.forEach(item => {
  const memberInfo = document.createElement('div');
  memberInfo.classList.add('members-info');
  
  const mNum = document.createElement('div');
  mNum.classList.add('m-num');
  mNum.innerText = item.uid;

  const mId = document.createElement('div');
  mId.classList.add('m-id');
  mId.innerText = item.id;

  memberInfo.appendChild(mNum);
  memberInfo.appendChild(mId);
  mobileMember.appendChild(memberInfo);
});

const membersInfoList = document.querySelectorAll(".members-info");
const modal=document.querySelector(".modal");
const closeBtn=document.querySelector(".close-btn");
const wrap=document.querySelector(".admin-page-wrap");
const memberInfo = document.getElementsByClassName('detail-info');

const paintModal = (data) => {
  for(let i=0;i<memberInfo.length;i++){
    memberInfo[i].innerText = data[0][i];
  }
}

// 모달창전용 회원 상세조회
const forModal = async (typeData, uid) => {
  const data = await sqlController({
    type: typeData,
    sql: `select id, email, name, member_role, created_at from member where uid=${uid}`
  })

  paintModal(data)
}

membersInfoList.forEach((membersInfo) => {
  const uid = membersInfo.firstElementChild.innerText;
  membersInfo.addEventListener("click", ()=> {
    forModal('look', uid);
    modal.style.display = "block";
    wrap.style.background = "#B5B5B5";
  });
});

closeBtn.addEventListener("click",function(){
  modal.style.display = "none";
  wrap.style.background = "none";

  // 모달창을 닫을때 기존에 출력되었던 데이터들을 삭제 
  for(const item of memberInfo) {
    item.innerText = "";
  }
})

// 모바일 UI용 삭제
const deleteForMobile = async (typeData, id) => {
  sqlController({
    type: typeData,
    sql: `delete from member where id='${id}'`
  });
}

modal.lastElementChild.addEventListener('click', () => {
  const showId = modal.children[1].children[1].innerText;
  deleteForMobile('delete', showId);
  location.reload(true);
})


// PC  전용 회원 테이블 조회
const pcMember = document.getElementsByClassName('member')[1];

const forPC = await sqlController({
  type: "look",
  sql: 'select uid, id, email, name, member_role, created_at from member order by uid desc',
});

forPC.forEach(item => {
  const pcMemberInfo = document.createElement('div');
  pcMemberInfo.classList.add('pc-members-info');
  
  const uid = document.createElement('div');
  uid.classList.add('col1');
  uid.innerText = item.uid;

  const id = document.createElement('div');
  id.classList.add('col2');
  id.innerText = item.id;
  
  const email = document.createElement('div');
  email.classList.add('col3');
  email.innerText = item.email;
  
  const name = document.createElement('div');
  name.classList.add('col4');
  name.innerText = item.name;

  const memberRole = document.createElement('div');
  memberRole.classList.add('col5');
  memberRole.innerText = item.member_role;

  const createdAt = document.createElement('div');
  createdAt.classList.add('col6');
  createdAt.innerText = item.created_at;

  const deleteButton = document.createElement('button');
  deleteButton.classList.add('delete');
  deleteButton.innerText = "삭제"

  pcMemberInfo.appendChild(uid);
  pcMemberInfo.appendChild(id);
  pcMemberInfo.appendChild(email);
  pcMemberInfo.appendChild(name);
  pcMemberInfo.appendChild(memberRole);
  pcMemberInfo.appendChild(createdAt);
  pcMemberInfo.appendChild(deleteButton);

  pcMember.appendChild(pcMemberInfo);

})


// PC UI용 삭제
const deleteForPc = async (typeData, uid) => {
  sqlController({
    type: typeData,
    sql: `delete from member where uid=${uid}`
  })
}

const test = document.getElementsByClassName('pc-members-info');
for(const element of test) {
  element.lastElementChild.addEventListener('click', () => {
    deleteForPc('delete', element.firstElementChild.innerText);
    location.reload(true);
  })
}

