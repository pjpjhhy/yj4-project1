<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/myPage.style.css"/>
    <link rel="stylesheet" href="./css/header.css"/>
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./js/mypage.js"></script>
    <title>마이페이지</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <?php include './components/header.php' ?>
    </header>
    <?php
      if(!isset($_SESSION['user_id'])) {      
        echo "
          <script>
            alert('로그인 해주세요.');
            history.go(-1);  
          </script>
        ";       
      }
    ?>

    <div class="wrap">
      <div class="profile-box">
        <div class="profile">
          <div class="profile-image">
            <img class=user-image src=<?=$user_profile?>>
            <img class="edit-icon" src="./assets/icons/edit.png"/>
          </div>
          <div class="user-name"><?=$user_name?>(<span id="user-social-type"><?=$user_social_type?></span>)</div>
          <div class="user-email"><?=$user_email?></div>
        </div>
      <section class="my-profile"> 
          <div class="tag">내 프로필</div>
          <div class="profile-info">
            <div class="info-box">
              <div class="icon-box">
                <img src="./assets/icons/user.png"/>
                <div class="info"><?=$user_name?></div>
              </div>
              <button class="change-info">닉네임 변경</button>
            </div>
            <div class="info-box">
              <div class="icon-box">
                <img src="./assets/icons/pw.png">
                <div class="info">비밀번호</div>
              </div>
              <button class="change-info">비밀번호 변경</button>
            </div>
            <div class="info-box">
              <div class="icon-box">
                <img src="./assets/icons/email.png">
                <div class="info"><?=$user_email?></div>
              </div>
              <button class="change-info">이메일 변경</button>
            </div>
          </div>
      </section>
      </div>
      <section class="like-list">
        <div class="tag">관심 목록</div>
        <div class="thumbnail-container">
          <div class="thumbnail-box">
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2023/12/04/05/54/ferris-wheel-8428738_1280.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2023/12/08/05/38/cat-8436843_640.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
            <div class="card">
              <div class="thumbnail">
                <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
              </div>
              <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <?php include './components/footer.php' ?>
    </footer>
    <div class="background hidden">
      <div class="modal">
        <div class="modal-title">
          <h2></h2>
          <svg width="18" height="18" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 3L3 27M3 3L27 27" stroke="#fff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <form action="./sql/infoUpdate.php" method="post">
          <div class="input-box name-box hidden">
            <label for="name-change">새로운 닉네임:</label>
            <input type="text" id="name-change" name="name">
          </div>
          <div class="input-box password-box hidden">
            <label for="password-change">새로운 비밀번호:</label>
            <input type="password" id="password-change" name="password">
            <label for="password-change-check">새로운 비밀번호 확인:</label>
            <input type="password" id="password-change-check">
          </div>
          <div class="input-box email-box hidden">
            <label for="email-change">새로운 이메일:</label>
            <input type="email" id="email-change" name="email"">
          </div>
          <input type="hidden" name="id" value=<?=$_SESSION['user_id']?>>
          <button>변경</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>