import { apiController } from "../api/apiController.js";
import { today } from "../config/date.js";

const paintData = (data) => {
  const searchsShow = document.getElementsByClassName('searchs-show')[0];
  searchsShow.innerHTML = " ";
  const searchResult = document.getElementsByClassName('search-result')[0];
  searchResult.classList.remove('hidden');

  if(Array.isArray(data.db) === true) {
    data.db.forEach(item => {
      const searchShow = document.createElement('a');
      searchShow.setAttribute('href', `../detail.php?code=${item.mt20id}`)
      searchShow.classList.add('search-show');
      
      const searchImg = document.createElement('div');
      searchImg.classList.add('search-img');

      const img = document.createElement('img');
      img.setAttribute('src', item.poster);
      searchImg.appendChild(img);
      
      const searchDescription = document.createElement('div');
      searchDescription.classList.add('search-description');

      const ul = document.createElement('ul');
    
      const title = document.createElement('li');
      const bold = document.createElement('strong');
      bold.innerText = item.prfnm;
      title.appendChild(bold);
      ul.appendChild(title);

      const date = document.createElement('li');
      date.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
      ul.appendChild(date);

      const genre = document.createElement('li');
      genre.innerText = item.genrenm;
      ul.appendChild(genre);

      const searchNow = document.createElement('div');
      searchNow.classList.add('search-now');

      const h2 = document.createElement('h2');
      h2.innerText = item.prfstate;
      searchNow.appendChild(h2);

      searchDescription.appendChild(ul);
      searchDescription.appendChild(searchNow);

      searchShow.appendChild(searchImg);
      searchShow.appendChild(searchDescription);

      searchsShow.appendChild(searchShow);

    })
  } else {
    searchsShow.innerHTML = "찾으시는 자료가 없습니다."
  }
}

const input = document.getElementsByTagName('input')[0];
const options = Array.from(document.getElementsByClassName('option'));


const showData = async (searchWord, location) => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: `&stdate=${today}&eddate=${today}&cpage=1&rows=20&prfstate=02&signgucode=${location}&shprfnm=${searchWord}&newsql=Y`
  });
  paintData(data);
}

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

// 쿼리 업데이트
const updateQuery = () => {
  const searchWord = input.value;
  const location = document.getElementById('location').innerText;
  const locationCode = convertNameToCode(location);
  showData(searchWord, locationCode);
}

// 무분별한 api 요청을 막기위한 디바운스 함수
const debounce = (func, delay) => {
  let timeoutId;
  return () => {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(() => {
      func();
    }, delay);
  };
};

// 지역 선택 목록 on/off
const showLocationList = () => {
  const areaButton = document.getElementById('area-button');
  areaButton.addEventListener('click', () => {
    options.forEach(item => {
      item.classList.toggle('option-hidden');
    })
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

input.addEventListener('keyup', debounce(() => {
  if(input.value.length !== 0) {
    updateQuery();
  }
}, 1000));  // 0.5초뒤 api 요청

const init = () => {
  selectLocation();
showLocationList();
}

init();


document.querySelectorAll('.search-area input').forEach(function(input) {
    var btn = input.parentNode.querySelector('.btnClear');
    btn.style.display = 'none';

    input.addEventListener('input', function() {
        btn.style.display = input.value.trim() !== "" ? 'block' : 'none';
    });

    btn.addEventListener('click', function(e) {
        input.value = "";
        btn.style.display = 'none';
        document.querySelector(".print-result").textContent = ""; // 입력한 값 비우기
        e.preventDefault();

    });
});
