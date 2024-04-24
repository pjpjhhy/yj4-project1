<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연 검색</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/header.css">
    <script type="module" src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./js/search.js" defer></script>
</head>

<body>
    <div class='wrapper'>
        <!-- 대가리 -->
        <header>
          <?php include './components/header.php' ?>
        </header>

        <!--  검색창 -->
        <section>
            <div class="search-area">
                <div class="inputWrap">
                    <div>🔍︎</div>													
                    <input type="text" class="form-control printName" placeholder="검색어를 입력하세요">
                    <button class="btnClear"><img src="./assets/icons/inputCancle-icon.png" alt=""></button>
                </div>	     
            </div>
        </section>        
        <!-- 공연 list -->
        <section class="list">
            <div class="searchs">
                <div class="search-result hidden">
                    <h2>검색결과</h2>
                </div>
                <div class="searchs-show">
             <!-- show -->
                
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