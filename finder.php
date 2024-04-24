<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>아이디/비밀번호 찾기</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/finder.css">
  <script type="module" src="./js/finder.js"></script>
</head>
<body>
  <div class="form">
    <div class="form-title">
      <a href="javascript:window.history.back();">
        <svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.0818 0.788148L0.75941 14.1105C0.516834 14.3639 0.326684 14.6627 0.199871 14.9898C-0.0666245 15.6385 -0.0666245 16.3661 0.199871 17.0148C0.326685 17.3418 0.516835 17.6406 0.75941 17.894L14.0818 31.2164C14.3302 31.4648 14.6251 31.6619 14.9497 31.7963C15.2743 31.9308 15.6222 32 15.9735 32C16.6831 32 17.3636 31.7181 17.8653 31.2164C18.367 30.7147 18.6489 30.0342 18.6489 29.3246C18.6489 28.6151 18.367 27.9346 17.8653 27.4329L9.07256 18.6667L29.2959 18.6667C30.0026 18.6667 30.6803 18.386 31.18 17.8863C31.6796 17.3867 31.9604 16.7089 31.9604 16.0023C31.9604 15.2956 31.6796 14.6179 31.18 14.1182C30.6803 13.6185 30.0026 13.3378 29.2959 13.3378L9.07256 13.3378L17.8653 4.57169C18.1151 4.32399 18.3133 4.02931 18.4485 3.70461C18.5838 3.37992 18.6535 3.03166 18.6535 2.67992C18.6535 2.32818 18.5838 1.97992 18.4485 1.65523C18.3133 1.33054 18.115 1.03585 17.8653 0.788148C17.6176 0.538413 17.3229 0.340186 16.9982 0.204915C16.6735 0.0696442 16.3253 1.19375e-06 15.9735 1.20912e-06C15.6218 1.2245e-06 15.2735 0.0696443 14.9488 0.204915C14.6242 0.340186 14.3295 0.538413 14.0818 0.788148Z"/>
        </svg>
      </a>
      <h2>아이디/비밀번호 찾기</h2>
    </div>
    <div class="find-box">
      <div class="input-box">
        <label for="id-find-email">이메일:</label>
        <input type="eamil" name="email" id="id-find-email">
      </div>
      <button type="submit" class="find-btn">아이디 찾기</button>
    </div>

    <div class="find-box">
        <div class="input-box">
          <label for="pw-find-email">이메일:</label>
          <input type="email" name="email" id="pw-find-email">
        </div>
        <div class="input-box">
          <label for="pw-find-id">아이디:</label>
          <input type="text" name="id" id="pw-find-id">
        </div>
        <button type="submit" class="find-btn">비밀번호 찾기</button>
    </div>
  </div>
</body>
</html>