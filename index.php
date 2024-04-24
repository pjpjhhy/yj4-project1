<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연나라</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./api/apiController.js" defer></script>
    <script type="module" src="../js/index.js" defer></script>

</head>

<body>
    <div class='wrapper'>

        <!-- 대가리 -->
        <header>
            <?php include './components/header.php' ?>
        </header>

        <!-- 일주일 인기 공연  -->
        <section class="one">
            <div class="popular">
                <!-- title -->
                <div class="pop-title">
                    <p>일주일간 예매순위</p>
                    <div></div>
                </div>
                <div class="pop">
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>            
                </div>
            </div>
        </section>

        <!-- 진행중인 공연 -->
        <section class="two">
            <div class="popular">
                <!-- title -->
                <div class="pop-title">
                    <p>진행중인 공연</p>
                    <div></div>
                    <p><a href="">더보기</a></p>
                </div>
                <div class="pop">
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>            
                </div>
            </div>
        </section>

        <!-- 어린이 공연 -->
        <section class="three">
            <div class="popular">
                <!-- title -->
                <div class="pop-title">
                    <p>어린이 공연</p>
                    <div></div>
                    <p><a href="">더보기</a></p>
                </div>
                <div class="pop">
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                            <!-- img -->
                            <div class="show-img">
                            <img src="./assets/icons/Spinner.svg" alt="">
                            </div>
                            <!-- description -->
                            <div class="pop-description">   
                                <ul>
                                    <li><strong>공연제목</strong></li>
                                    <li>24.02.29 ~ 24.03.29</li>
                                    <li>뮤지컬</li>
                                </ul>
                            </div>
                        </div>
                        <!-- show -->
                        <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                        <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>
                    <!-- show -->
                    <div class="pop-show">
                        <!-- img -->
                        <div class="show-img">
                              <img src="./assets/icons/Spinner.svg" alt="">
                        </div>
                        <!-- description -->
                        <div class="pop-description">   
                            <ul>
                                <li><strong>공연제목</strong></li>
                                <li>24.02.29 ~ 24.03.29</li>
                                <li>뮤지컬</li>
                            </ul>
                        </div>
                    </div>            
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