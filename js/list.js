import { apiController } from "../api/apiController.js";
import { selectedDay, select } from "./calendar.js";

const options = Array.from(document.getElementsByClassName('option'));

// 리스트페이지API 출력 함수
const paintData = (data, elementTag) => {
  const areaShow = document.getElementsByClassName(elementTag)[0]; 
  areaShow.innerHTML = "";

  if(Array.isArray(data.db) === true){
    data.db.forEach(item => {
      
      const aShow = document.createElement('a');
      aShow.setAttribute('href', `../detail.php?code=${item.mt20id}`)
      aShow.classList.add('a-show');
  
      const aImg = document.createElement('div');
      aImg.classList.add('a-img');
  
      const img = document.createElement('img');
      img.setAttribute('src', item.poster );
      aImg.appendChild(img);
  
      const aDescription = document.createElement('div');
      aDescription.classList.add('a-description');
  
      const ul = document.createElement('ul');
  
      const title = document.createElement('li');
      const bold = document.createElement('bold');
      bold.innerText = item.prfnm;
      title.appendChild(bold);
      ul.appendChild(title);
  
      const date = document.createElement('li');
      data.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
      ul.appendChild(date);
  
      const genre = document.createElement('li');
      genre.innerText = item.genrenm;
      ul.appendChild(genre);
  
      aDescription.appendChild(ul);
  
      aShow.appendChild(aImg);
      aShow.appendChild(aDescription);
  
      areaShow.appendChild(aShow);
    });
  }else if(typeof data.db === 'object' && data.db !== null && !Array.isArray(data.db)) {
    // 데이터가 하나밖에 없을때

    const aShow = document.createElement('div');
    aShow.setAttribute('href', `../detail.php?code=${data.db.mt20id}`)
    aShow.classList.add('a-show');

    const aImg = document.createElement('div');
    aImg.classList.add('a-img');

    const img = document.createElement('img');
    img.setAttribute('src', data.db.poster );
    aImg.appendChild(img);

    const aDescription = document.createElement('div');
    aDescription.classList.add('a-description');

    const ul = document.createElement('ul');

    const title = document.createElement('li');
    const bold = document.createElement('bold');
    bold.innerText = data.db.prfnm;
    title.appendChild(bold);
    ul.appendChild(title);

    const date = document.createElement('li');
    data.innerText = `${data.db.prfpdfrom} ~ ${data.db.prfpdto}`;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = data.db.genrenm;
    ul.appendChild(genre);

    aDescription.appendChild(ul);

    aShow.appendChild(aImg);
    aShow.appendChild(aDescription);

    areaShow.appendChild(aShow);
  }else {
    // 불러온 데이터가 없는 경우
    areaShow.innerText = "공연이 없습니다."
  }
  
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


// api요청 함수
const showListApi = async (genre, kid, locationCode) => {
  const obj = {
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: `&stdate=${selectedDay}&eddate=${selectedDay}&cpage=1&rows=10&signgucode=${locationCode}&newsql=Y&shcate=${genre}&kidstate=${kid}`,
  }
  const data = await apiController(obj);
  paintData(data, "area-show")
}

// 쿼리 업데이트 함수
export const updateQuery = () => {
  const genre = document.querySelector('.genres input:checked')?.value;
  const kid = document.getElementById('kid').checked ? "Y" : "";
  const location = document.getElementById('location').innerText; 
  const locationCode = convertNameToCode(location);
  showListApi(genre, kid, locationCode);
}

// 장르 업데이트 함수
const updateGenre = () => {
  const genre = document.querySelectorAll('.genres input');
  genre.forEach((item) => {
    item.addEventListener('change', updateQuery);
  })
}

// 어린이 체크  함수
const updateKid = () => {
  const kid = document.getElementById('kid');
  kid.addEventListener('click', updateQuery);
}

// 지역 선택
const selectLocation = () => {
  options.forEach(item => {
    item.addEventListener('click', () => {
      const location = document.getElementById('location');
      location.innerText = item.innerText;
      updateQuery();
      options.forEach(item => {
        item.classList.add('option-hidden');
      })
    })
  })
}

const init = () => {
  select();
  showLocationList();
  selectLocation();
  updateGenre();
  updateKid();
  updateQuery();
}

init();