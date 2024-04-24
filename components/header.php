<?php 

include "config/const.php";

if(empty($_SESSION["user_id"])) {
  session_start();
}

if(isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  $user_id = "";
}

if(isset($_SESSION["user_name"])) {
  $user_name = $_SESSION["user_name"];
} else {
  $user_name = "";
}

if(isset($_SESSION['user_email'])) {
  $user_email = $_SESSION['user_email'];
} else {
  $user_email = "";

}


if(isset($_SESSION["user_profile"])) {
  $user_profile = $_SESSION["user_profile"];
} else {
  $user_profile = "";
}

if(isset($_SESSION["user_social_type"])) {
  $user_social_type = $_SESSION["user_social_type"];
} else {
  $user_social_type = "";
}

if(isset($_SESSION["user_role"])) {
  $user_role = $_SESSION["user_role"];
} else {
  $user_role = "";
}
?>



<div class="head">
  <!-- 로고 및 메뉴 -->
  <div class="main-logo">
      <div class="logo">
          <h1><a href="./index.php">공연나라</a></h1>
      </div>
      <!-- 메뉴 -->
      <div class="menu-container">
          <ul>
            <li><a href="./list.php">공연목록</a></li>
          </ul>
      </div> 
  </div>
  <!--  검색창 및 토글 -->
  <div class="main-area">
    <nav>      
        <!-- area -->
        <div id="area-box">
          <div id="area-button">
          <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.00008 0C3.58908 0 8.14446e-05 3.589 8.14446e-05 7.995C-0.0289186 14.44 7.69608 19.784 8.00008 20C8.00008 20 16.0291 14.44 16.0001 8C16.0001 3.589 12.4111 0 8.00008 0ZM8.00008 12C5.79008 12 4.00008 10.21 4.00008 8C4.00008 5.79 5.79008 4 8.00008 4C10.2101 4 12.0001 5.79 12.0001 8C12.0001 10.21 10.2101 12 8.00008 12Z" fill="white"/>
          </svg>
            <div id="location">서울</div>
          </div>
          <ul class="option-list">
            <li class="option option-hidden" >서울</li>
            <li class="option option-hidden" >인천</li>
            <li class="option option-hidden" >세종</li>
            <li class="option option-hidden" >대전</li>
            <li class="option option-hidden" >광주</li>
            <li class="option option-hidden" >울산</li>
            <li class="option option-hidden" >대구</li>
            <li class="option option-hidden" >부산</li>
          </ul>
        </div>
        <!-- profile -->
        <?php 
          if(!$user_id) {
        ?>
        <div class='user-info'>
          <div><a href="signIn.php">로그인</a></div>
          <div><a href="signUp.php">회원가입</a></div>
        </div>
        <?php
          } else {
            ?>
            <div class='user-info'>
              <div class='user-btn'>
                  <div class='user-img'>
                    <img src=<?=$user_profile?> alt="User Profile Image">
                  </div>
              </div>
              <ul class="user-list">
                  <li class="user user-hidden" >
                    <a href="myPage.php">
                      <div><?=$user_name?></div>
                      <div>프로필 보기</div>
                    </a>
                  </li>
                  <?php 
                    if($user_role == "관리자") {
                      echo '<li class="user user-hidden" ><a href="adminPage.php">관리자 페이지</a></li>';
                    } 
                  ?>
                  <?php 
                  
                  ?>
                  <li class="user user-hidden" ><a href="./logout.php">로그아웃</a></li>
              </ul>
            </div>
        <?php
          }
          ?>
        <div class='toggle-search-img'>
          <a href="./search.php">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" fill="#fff" viewBox="0 0 72 72">
              <path d="M 31 11 C 19.973 11 11 19.973 11 31 C 11 42.027 19.973 51 31 51 C 34.974166 51 38.672385 49.821569 41.789062 47.814453 L 54.726562 60.751953 C 56.390563 62.415953 59.088953 62.415953 60.751953 60.751953 C 62.415953 59.087953 62.415953 56.390563 60.751953 54.726562 L 47.814453 41.789062 C 49.821569 38.672385 51 34.974166 51 31 C 51 19.973 42.027 11 31 11 z M 31 19 C 37.616 19 43 24.384 43 31 C 43 37.616 37.616 43 31 43 C 24.384 43 19 37.616 19 31 C 19 24.384 24.384 19 31 19 z"></path>
            </svg>
          </a>
        </div>
</nav>
      <!-- 토글버튼 -->
      <div class="toggle">
          <div class="tog-btn">
              <button id="toggleButton">
              <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.4737 19.7647C30.1225 19.765 30.7463 19.9745 31.2158 20.3498C31.6854 20.725 31.9647 21.2374 31.9958 21.7806C32.027 22.3238 31.8077 22.8562 31.3833 23.2676C30.9589 23.6789 30.362 23.9376 29.7162 23.9901L29.4737 24H2.52632C1.87753 23.9997 1.25374 23.7902 0.784191 23.415C0.314647 23.0397 0.0353482 22.5273 0.00416966 21.9841C-0.0270088 21.4409 0.192323 20.9085 0.616717 20.4971C1.04111 20.0858 1.63803 19.8271 2.28379 19.7746L2.52632 19.7647H29.4737ZM29.4737 9.88235C30.1437 9.88235 30.7863 10.1055 31.2601 10.5026C31.7338 10.8997 32 11.4384 32 12C32 12.5616 31.7338 13.1003 31.2601 13.4974C30.7863 13.8945 30.1437 14.1176 29.4737 14.1176H2.52632C1.8563 14.1176 1.21372 13.8945 0.739941 13.4974C0.266165 13.1003 0 12.5616 0 12C0 11.4384 0.266165 10.8997 0.739941 10.5026C1.21372 10.1055 1.8563 9.88235 2.52632 9.88235H29.4737ZM29.4737 0C30.1437 0 30.7863 0.223109 31.2601 0.620245C31.7338 1.01738 32 1.55601 32 2.11765C32 2.67928 31.7338 3.21791 31.2601 3.61505C30.7863 4.01219 30.1437 4.23529 29.4737 4.23529H2.52632C1.8563 4.23529 1.21372 4.01219 0.739941 3.61505C0.266165 3.21791 0 2.67928 0 2.11765C0 1.55601 0.266165 1.01738 0.739941 0.620245C1.21372 0.223109 1.8563 0 2.52632 0H29.4737Z" fill="white"/>
              </svg>

              </button>
          </div>
          <div class="tog-menu">
              <div class="id-box">
                <?php 
                  if(!$user_id) {
                ?>
                  <ul class="id">
                      <li><a href="signIn.php">로그인해주세요.</a></li>
                      <li><button id="closeButton"><img src="../assets/icons/bambergerCancel-icon.png" alt="토글 메뉴 끄기"></button></li>
                  </ul>
                <?php
                  } else {
                ?>
                  <ul class="id">
                    <li>
                      <a href="myPage.php" class="toggle-user-wrap">
                        <div class="toggle-user-img-wrap">
                          <img src=<?=$user_profile?> alt="User Profile Image">
                        </div>
                        <span><strong><?=$user_name?></strong></span>
                      </a>
                    </li>
                    <li><button id="closeButton"><img src="../assets/icons/bambergerCancel-icon.png" alt="토글 메뉴 끄기"></button></li>
                  </ul>
                <?php
                  }
                ?>
              </div>
              <div class="menus">
                  <div>
                      <ul class="menu">
                        <li><a href="./search.php">공연검색</a></li>
                        <li><a href="./list.php">공연목록</a></li>
                      </ul>
                  </div>
                  <div>
                    <?php 
                      if(!$user_id) {
                    ?>
                      <ul class="as">
                        <li><a href="signIn.php">로그인</a></li>
                        <li><a href="signUp.php">회원가입</a></li>
                      </ul>
                    <?php 
                      } else {
                    ?>
                      <ul class="as">
                        <?php if($user_role == "관리자") {
                          echo '<li><a href="adminPage.php">관리자 페이지</a></li>';
                        } ?>
                          <li><a href="logout.php">로그아웃</a></li>
                      </ul>
                    <?php
                    }
                    ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>