<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세페이지</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/detail.css">
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src='./js/detail.js'></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=a75f6db1726414effe55a0976b9eb28b"></script>
</head>

<body>
        <!-- 대가리 -->
        <header>
            <?php include './components/header.php' ?>
        </header>

        <!-- 첫번째 섹션 -->
        <section>
            <div class="back">
                <img class='back-img blur' src="./assets/img/mout.jpg" alt="">
                <div class="fronts">
                    <div class="poast-img">
                        <img src="./assets/img/mout.jpg" alt="">
                    </div>
                    <div class="poast-des">
                        <div>
                            <div>
                                <img src="../assets/icons/location-white.svg" alt="">
                            </div>
                            <div class="poast-area">
                                서울 특별시
                            </div>
                        </div>
                        <div class="area-name">
                            문화대극장
                        </div>
                        <div class="show-price">
                            <p>가격 보기</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div id='second'>
        <!-- 두번째 섹션 -->
        <section class="two">
            <div class="two-info">
                <div class="info-area">
                    <div class="wrap-show-detail"><a href="#show-detail">공연 정보</a></div>
                    <div class="wrap-show-area"><a href="#show-area">공연 시설</a></div>
                </div>
                <div id="show-detail"></div>
                <div class="show-info">
                    <div class="info-details">
                        <h2>공연 상세정보</h2>
                        <div class="detailss">
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/seasson.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연기간</div>
                                        <div class="seasson"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/genres.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 장르</div>
                                        <div class="genre"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/runtime.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 시간</div>
                                        <div class="runtime"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/age.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 관람 연령</div>
                                        <div class="age"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/together.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>출연진</div>
                                        <div class="cast"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/pd.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>제작진</div>
                                        <div class="pd"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show-schedule">
                            <div>공연 스케줄</div>
                            <div class="schedule"></div>
                        </div>
                        <div class="info-imgs">
                            <img src="./assets/img/mout.jpg" alt="">
                        </div>
                        <div class="info-btn">
                            <button>공연정보 더보기</button>
                        </div>
                    </div>
                    <div id="show-area"></div>
                    <div class="maps">
                        <h2>공연 시설</h2>
                        <div class="map-name">
                            <img src="./assets/icons/location.png" alt="">
                            <div>
                                <div class="location-name">아리아트홀</div>
                                <div class="show-location">서울특별시 종로구 대학로 8가 30 (동숭동)</div>
                            </div>
                        </div>
                        <div class="kakao-map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class='pc-prices'>
            <div>
                <div class="show-schedule">
                    <div>공연 스케줄</div>
                    <div class="pc-schedule"></div>
                </div>
            </div>
            <div>
                <div class = 'user-needs'>
                    <div>
                      <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 0C10.3261 0 11.5979 0.526784 12.5355 1.46447C13.4732 2.40215 14 3.67392 14 5V19C14 19.181 13.9509 19.3587 13.8579 19.514C13.7648 19.6693 13.6314 19.7965 13.4718 19.8819C13.3121 19.9673 13.1323 20.0078 12.9515 19.999C12.7707 19.9902 12.5956 19.9325 12.445 19.832L7 16.202L1.556 19.832C1.4133 19.9275 1.2484 19.9847 1.0772 19.9979C0.906001 20.0112 0.734264 19.9802 0.578531 19.9079C0.422798 19.8355 0.288316 19.7243 0.188039 19.5849C0.0877628 19.4455 0.0250703 19.2827 0.00600004 19.112L0 19V5C0 3.67392 0.526784 2.40215 1.46447 1.46447C2.40215 0.526784 3.67392 0 5 0H9Z"/>
                      </svg>
                    </div>
                    <div>예매하기</div>
                </div>
            </div>
        </section>
    </div>

   
        <!-- 세번째 섹션 -->
        <section class = 'three'>
            <div class = 'user-needs'>
                <div>
                  <svg width="14" height="20" viewBox="0 0 14 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 0C10.3261 0 11.5979 0.526784 12.5355 1.46447C13.4732 2.40215 14 3.67392 14 5V19C14 19.181 13.9509 19.3587 13.8579 19.514C13.7648 19.6693 13.6314 19.7965 13.4718 19.8819C13.3121 19.9673 13.1323 20.0078 12.9515 19.999C12.7707 19.9902 12.5956 19.9325 12.445 19.832L7 16.202L1.556 19.832C1.4133 19.9275 1.2484 19.9847 1.0772 19.9979C0.906001 20.0112 0.734264 19.9802 0.578531 19.9079C0.422798 19.8355 0.288316 19.7243 0.188039 19.5849C0.0877628 19.4455 0.0250703 19.2827 0.00600004 19.112L0 19V5C0 3.67392 0.526784 2.40215 1.46447 1.46447C2.40215 0.526784 3.67392 0 5 0H9Z"/>
                  </svg>
                </div>
                <div>예매하기</div>
            </div>
        </section>

        <!-- 푸터 -->
        <footer>
            <?php include './components/footer.php' ?>      
        </footer>

        

</body>

</html>