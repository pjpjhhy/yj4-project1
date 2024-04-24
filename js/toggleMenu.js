document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.getElementById('toggleButton');
  const closeButton = document.getElementById('closeButton');
  const menuContainer = document.querySelector('.tog-menu');
  const body = document.body;

  let scrollDisabled = false;

  function toggleMenu() {
      menuContainer.style.display = menuContainer.style.display === 'none' ? 'flex' : 'none';
      
      // body에 menu-opened 클래스를 toggle하여 스타일을 변경
      body.classList.toggle('menu-opened', menuContainer.style.display !== 'none');

      // 스크롤을 막거나 허용합니다.
      document.documentElement.style.overflow = scrollDisabled ? 'hidden' : 'auto';
      scrollDisabled = !scrollDisabled;
  }

  toggleButton.addEventListener('click', toggleMenu);

      closeButton.addEventListener('click', function () {
      menuContainer.style.display = 'none';
      body.classList.remove('menu-opened');
      scrollDisabled = true;
      document.documentElement.style.overflow = 'auto';
  });
  // 페이지가 로드된 후에 한 번만 클릭하여 초기화
  toggleButton.click();

  // 새로고침 시 초기 스크롤 상태를 설정
  window.addEventListener('beforeunload', function () {
      scrollDisabled = true;
  });
});

// user profile on/off
const userLocationList = () => {
  const userButton = document.querySelector('.user-btn');
  const options = document.querySelectorAll('.user-list .user');
  userButton.addEventListener('click', () => {
    options.forEach(item => {
      item.classList.toggle('user-hidden');
      // 아이템을 눌렀을때 
      item.addEventListener('click', () => {
        options.forEach(item => {
          item.classList.add('user-hidden')
        })
      })
      // 옵션전체에 user-hidden 클라스를 추가하자
    });
  });
};

// 호출
userLocationList();
