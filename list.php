<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연 목록</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="./css/calendar.css">
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./js/list.js"></script>
    <script type="module" src="./js/calendar.js"></script>
</head>

<body>
   <div class="wrapper">
     <!-- 대가리 -->
     <header>
      <?php include './components/header.php' ?>
    </header>
    
    <!-- 장르 -->
    <section>
        <div class="main-title">
            <!-- title -->
            <div class="title">
                <div class="area">
                    <strong><p><span id="location-title">서울</span>공연</p></strong>
                </div>
                <div class="day-age">
                    <div class="open-calendar">
                      <div class="click-date">
                        날짜
                      </div>
                      <?php include './components/calendar.php'?>
                    </div>
                    <input type="checkbox" name="kid" id="kid">
                    <label for="kid">아동</label>
                </div>
            </div>
            <!-- genre -->

          <div class="genres">
              <div class="grid-container">
                <div>
                  <input type="radio" name="genre" id="all" value="" checked >
                  <input type="radio" name="genre" id="theater" value="AAAA" >
                  <input type="radio" name="genre" id="dance" value="BBBC" >
                  <input type="radio" name="genre" id="public-dance" value="BBBE" >
                  <input type="radio" name="genre" id="european-classical-music" value="CCCA" >
                  <input type="radio" name="genre" id="korean-classical-music" value="CCCC" >
                  <input type="radio" name="genre" id="popular-music" value="CCCD" >
                  <input type="radio" name="genre" id="mixed" value="EEEA" >
                  <input type="radio" name="genre" id="circus-magic" value="EEEB" >
                  <input type="radio" name="genre" id="musical" value="GGGA" >
                </div>
                <ul class="grid-item">
                    <li><label for="all">전체</label></li>
                    <li><label for="theater">연극</label></li>
                    <li><label for="dance">무용</label></li>
                    <li><label for="public-dance">대중무용</label></li>
                    <li><label for="european-classical-music">클래식</label></li>
                    <li><label for="korean-classical-music">국악</label></li>
                    <li><label for="popular-music">대중음악</label></li>
                    <li><label for="mixed">복합</label></li>
                    <li><label for="circus-magic">서커스/마술</label></li>
                    <li><label for="musical">뮤지컬</label></li>
                </ul>
              </div>
          </div>
        </div>
    </section>

    <!-- 공연내용 -->
    <section>
        <div class="area-shows">
            <div class="area-show">
             <img src="./assets/icons/Spinner.svg" alt="loading" class="loading">
            </div>
        </div>
    </section>
    

        <!-- 푸터 -->
        <footer>
          <?php include './components/footer.php' ?>
        </footer>
   </div>
</body>


</html>