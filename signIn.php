<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/signIn.style.css"/>
  <title>로그인</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
  <?php include 'config/const.php' ?>
  <div class="wrap">
    <section class="sign-in">
      <div class="icon">
        <a href="#" onclick="history.back()">
          <img src="./assets/icons/arrow.png"/>
        </a>
      </div>
      <div class="login">
        <h1>공연나라</h1>
        <form class="sign-in-form" action="login.php" method="post">
        <div class="id-box">
          <div class="user-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="50" viewBox="0 0 18 50" fill="none">
              <path class="user1" d="M9 26C11.7614 26 14 23.7614 14 21C14 18.2386 11.7614 16 9 16C6.23858 16 4 18.2386 4 21C4 23.7614 6.23858 26 9 26Z" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path class="user1" d="M17 34C17 31.8783 16.1571 29.8434 14.6569 28.3431C13.1566 26.8429 11.1217 26 9 26C6.87827 26 4.84344 26.8429 3.34315 28.3431C1.84285 29.8434 1 31.8783 1 34" stroke="#D9D9D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <input class="id" type="text" placeholder="아이디" name="id"/>
        </div>
        <div class="password-box">
          <div class="pw-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none" style="margin-top: 16;">
              <path class="pw1" d="M2 18.9797C1.45 18.9797 0.979333 18.8029 0.588 18.4492C0.196666 18.0955 0.000666667 17.6698 0 17.1721V8.13416C0 7.63707 0.196 7.21168 0.588 6.858C0.98 6.50431 1.45067 6.32717 2 6.32657H3V4.51898C3 3.26873 3.48767 2.20315 4.463 1.32225C5.43833 0.441353 6.61733 0.00060253 8 0C9.38333 0 10.5627 0.440751 11.538 1.32225C12.5133 2.20375 13.0007 3.26933 13 4.51898V6.32657H14C14.55 6.32657 15.021 6.50371 15.413 6.858C15.805 7.21229 16.0007 7.63767 16 8.13416V17.1721C16 17.6692 15.8043 18.0949 15.413 18.4492C15.0217 18.8035 14.5507 18.9803 14 18.9797H2ZM2 17.1721H14V8.13416H2V17.1721ZM8 14.4607C8.55 14.4607 9.021 14.2839 9.413 13.9302C9.805 13.5765 10.0007 13.1508 10 12.6531C10 12.156 9.80433 11.7307 9.413 11.377C9.02167 11.0233 8.55067 10.8461 8 10.8455C7.45 10.8455 6.97933 11.0227 6.588 11.377C6.19667 11.7313 6.00067 12.1566 6 12.6531C6 13.1502 6.196 13.5759 6.588 13.9302C6.98 14.2845 7.45067 14.4613 8 14.4607ZM5 6.32657H11V4.51898C11 3.76581 10.7083 3.12563 10.125 2.59841C9.54167 2.0712 8.83333 1.80759 8 1.80759C7.16667 1.80759 6.45833 2.0712 5.875 2.59841C5.29167 3.12563 5 3.76581 5 4.51898V6.32657Z" fill="#D9D9D9"/>
            </svg>
          </div>
          <input class="password" type="password" placeholder="비밀번호" name="pw"/>
        </div>
        <button class="button">로그인</button>
        <div class="find-button">
          <a href="finder.php">
            아이디/비밀번호 찾기
          </a>
          <a href="signUp.php">
            회원가입
          </a>
        </div>
        </form>
        <!-- 에러  -->
        <div class="id-error">·아이디를 입력해 주세요.</div>
        <div class="pw-error">·비밀번호를 입력해 주세요.</div>
      </div>
      <div class="hr-sect">소셜 로그인</div>
      <!-- 태블릿 -->
      <div class="social">
        <a href=<?= social_login::social_login_url('google') ?>>
          <div class="google">
            <img src="./assets/icons/google.jpg"/>
            <div>Google 계정으로 로그인</div>
          </div>
        </a>
        <a href=<?= social_login::social_login_url('kakao')?>>
          <div class="kakao">
            <img src="./assets/icons/kakao.png"/>
            <div>카카오 계정으로 로그인</div>
          </div>
        </a>
        <a href=<?= social_login::social_login_url('naver')?>>
          <div class="naver">
            <img src="./assets/icons/naver.png"/>
            <div>네이버 계정으로 로그인</div>
          </div>
        </a>
      </div>
      <!-- 모바일 -->
      <div class="mobile-social">
        <div class="m-google">
          <img src="./assets/icons/Google_icon.png"/>
        </div>
        <div class="m-naver">
          <img src="./assets/icons/naver2.png"/>
        </div>
        <div class="m-kakao">
          <img src="./assets/icons/kakao.png"/>
        </div>
      </div>
    </section>
  </div>
  <script src="./js/signIn.js"></script>
</body>
</html>