import { apiController } from "../api/apiController.js";
import { today } from "../config/date.js";

const options = Array.from(document.getElementsByClassName('option'));



// 공연목록API용 출력 함수
const paintData = (data, elementTag) => {
  const section = document.querySelector(elementTag);
  section.innerHTML = "";
  data.db.forEach(item => {
    const popShow = document.createElement('a');
    popShow.setAttribute('href', `detail.php?code=${item.mt20id}`);
    popShow.classList.add('pop-show');

    const showImg = document.createElement('div');
    showImg.classList.add('show-img');

    const img = document.createElement('img');
    img.setAttribute('src', `${item.poster}`);
    showImg.appendChild(img);

    const popDescription = document.createElement('div');
    popDescription.classList.add('pop-description');
    const ul = document.createElement('ul');

    const name = document.createElement('li');
    const bold = document.createElement('strong');
    bold.innerText = item.prfnm;
    name.appendChild(bold);
    ul.appendChild(name);

    const date = document.createElement('li');
    date.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = item.genrenm;
    ul.appendChild(genre);

    popDescription.appendChild(ul);


    popShow.appendChild(showImg);
    popShow.appendChild(popDescription);

    section.appendChild(popShow);
  });
}


// 현재 예매순위(일주인동안))
const boxOfficeApi = async ( locationCode ) => {
  const data = await apiController({
    url: "http://kopis.or.kr/openApi/restful/boxoffice?",
    query: `&ststype=week&date=${today}&area=${locationCode}`
  }) 

  const section = document.querySelector('.one .pop');
  section.innerHTML = "";
  for(let i=0;i<5;i++){
    const popShow = document.createElement('a');
    popShow.setAttribute('href', `detail.php?code=${data.boxof[i].mt20id}`);
    popShow.classList.add('pop-show');

    const showImg = document.createElement('div');
    showImg.classList.add('show-img');
    
    const img = document.createElement('img');
    img.setAttribute('src', `http://www.kopis.or.kr/${data.boxof[i].poster}`);
    showImg.appendChild(img);

    const popDescription = document.createElement('div');
    popDescription.classList.add('pop-description')
    const ul = document.createElement('ul');
    
    const name = document.createElement('li');
    const bold = document.createElement('strong');
    bold.innerText = data.boxof[i].prfnm;
    name.appendChild(bold);
    ul.appendChild(name);

    const date = document.createElement('li');
    date.innerText = data.boxof[i].prfpd;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = data.boxof[i].cate;
    ul.appendChild(genre);

    popDescription.appendChild(ul);


    popShow.appendChild(showImg);
    popShow.appendChild(popDescription);

    section.appendChild(popShow);
  }
  
}

// 현재 진행중인 공연
const nowShwoingApi = async ( locationCode ) => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: `&stdate=${today}&eddate=${today}&cpage=1&rows=5&prfstate=02&newsql=Y&signgucode=${locationCode}`,
  })

  paintData(data, '.two .pop');
}

// 현재 진행중인 어린이 공연
const kidsShowApi = async ( locationCode ) => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: `&stdate=20240301&eddate=20240318&cpage=1&rows=5&prfstate=02&kidstate=Y&newsql=Y&signgucode=${locationCode}`,
  });
  
  paintData(data, '.three .pop');
  
}


// 지역 선택 목록 on/off
const showLocationList = () => {
  const areaButton = document.getElementById('area-button');
  areaButton.addEventListener('click', () => {
    options.forEach(item => {
      item.classList.toggle('option-hidden');
    })
  })
}

// 지역 이름을 지역 코드로 변환
const convertNameToCode = (locationName) => {
  switch(locationName) {
    case "서울": return "11";
    case "인천": return "28";
    case "세종": return "36";
    case "대전": return "30";
    case "광주": return "29";
    case "울산": return "31";
    case "대구": return "27";
    case "부산": return "26";
    default: return "11"; // 서울로 통일
  }
}

// 선택 되어 있는 지역으로 업데이트
const updateQuery = () => {
  const location = document.getElementById('location').innerText; 
  const locationCode = convertNameToCode(location);
  nowShwoingApi(locationCode);
  kidsShowApi(locationCode);
  boxOfficeApi(locationCode);
  options.forEach(item => {
    item.classList.add('option-hidden');
  })
}

// 지역 선택
const selectLocation = () => {
  options.forEach(item => {
    item.addEventListener('click', () => {
      const location = document.getElementById('location');
      location.innerText = item.innerText;
      updateQuery();
    })
  })

}

const init = () => {
  showLocationList();
  selectLocation();
  updateQuery();
}

init();
