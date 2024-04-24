<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css"/>
    <link rel="stylesheet" href="./css/adminPage.css"/>
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./js/adminPage.js"></script>
    <title>관리자 페이지</title>
</head>
<body>
  <div class="admin-page-wrap">
  <header>
    <?php include './components/header.php' ?>
  </header>
  <?php
    if(!isset($_SESSION['user_role'])) {      
      echo "
        <script>
          alert('로그인 해주세요.');
          history.go(-1);  
        </script>
      ";       
    } else if($user_role != "관리자") {
      echo "
        <script>
          alert('관리자가 아닙니다.');
          history.go(-1);  
        </script>
      ";
    }
  ?>

  <!-- 모바일 -->
  <div class="mobile-wrap">
    <section>
      <div class="member">
        <div class="member-list">회원관리</div>
        <div class="member-title">
          <div class="m-num">번호</div>
          <div class="m-id">아이디</div>
        </div>
      </section>
    <div class="modal">
      <div class="modal-title">
        <div>상세 정보</div>
        <img class="close-btn" src="./assets/icons/close.png"/>
      </div>
      <div class="members-detail">
        <div class="detail-sort">아이디</div>
        <div class="detail-info"></div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">이메일</div>
        <div class="detail-info"></div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">이름</div>
        <div class="detail-info"></div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">유형</div>
        <div class="detail-info"></div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">가입일</div>
        <div class="detail-info"></div>
      </div>
      <button class="delete">삭제</button>
    </div>
    </div>
    <!-- pc -->
    <div class="pc-wrap">
      <section>
        <div class="member">
          <div class="member-list">회원관리</div>
          <div class="member-title">
            <div class="col1">번호</div>
            <div class="col2">아이디</div>
            <div class="col3">이메일</div>
            <div class="col4">이름</div>
            <div class="col5">유형</div>
            <div class="col6">가입일</div>
            <div class="col7">삭제</div>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <?php include './components/footer.php' ?>
    </footer>
  </div>
</body>
</html>