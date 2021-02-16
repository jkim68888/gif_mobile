<? include "./lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gwangju Independent Film</title>
        <link rel="shortcut-icon" href="images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="popup">
            <div class="pWrap">
                <h3>NOTICE</h3>
                <div class="pTop">
                    <p>
                        본 사이트는 상업적 목적이 아닌<br>
                        <span>개인 포트폴리오</span> 용도로 만들어 졌습니다.<br>
                        홈페이지의 일부 내용과 이미지 등은<br>
                        <span>그 출처가 따로 있음</span>을 밝힙니다.<br>
                    </p>
                    <button type="button" onclick="location.href='http://cinema68888.dothome.co.kr?move_pc_screen=1'">
                        <span class="text">pc화면 바로가기</span>
                    </button>
                </div>
                <div class="pBottom">
                    <a href="#closepop" title="팝업창 닫기" id="close_today">오늘하루보지않기</a>
                    <a href="#closepop" title="팝업창 닫기" id="close">닫기</a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="pTop">
                <? include "./lib/top_nav.php"; ?>
            </div>
            <div class="topNav">
                <ul>
                    <li><a href="tnav/join.php">회원가입</a></li>
                    <li><a href="tnav/nonMember.php">비회원 예매확인</a></li>
                </ul>
            </div>
            <div class="gnb01">
                <ul class="first">
                    <li>
                        <a href="movie/current.php">
                            <img src="images/common/panel_movie_icon.png" alt="영화 아이콘">
                            <p>영화</p>
                        </a>
                    </li>
                    <li class="ticket">
                        <a href="ticket/ticketing.php">
                            <img src="images/common/panel_ticketing_icon.png" alt="예매 아이콘">
                            <p>예매</p>
                        </a>
                    </li>
                    <li class="mypage">
                        <a href="tnav/join_form_modify.php">
                            <img src="images/common/panel_mypage_icon.png" alt="마이페이지 아이콘">
                            <p>마이페이지</p>
                        </a>
                    </li>
                </ul>
                <ul class="last">
                    <li>
                        <a href="introduce/about.php">
                            <img src="images/common/panel_independent_icon.png" alt="독립영화 아이콘">
                            <p>독립영화</p>
                        </a>
                    </li>
                    <li class="map">
                        <a href="introduce/map.php">
                            <img src="images/common/panel_map_icon.png" alt="오시는길 아이콘">
                            <p>오시는길</p>
                        </a>
                    </li>
                    <li>
                        <a href="customer/faq.php">
                            <img src="images/common/panel_customer_icon.png" alt="고객센터 아이콘">
                            <p>고객센터</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="gnb02">
                <ul>
                    <li>
                        <a href="community/notice.php" class="mainNav">커뮤니티</a>
                        <ul class="subNav">
                            <li><a href="community/notice.php">공지사항</a></li>
                            <li><a href="community/event.php">이벤트</a></li>
                            <li><a href="community/news.php">언론</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="org/introduce.php" class="mainNav">광주영화영상인연대</a>
                        <ul class="subNav">
                            <li><a href="org/introduce.php">단체소개</a></li>
                            <li><a href="org/familysite.php">유관단체</a></li>
                            <li><a href="org/identity.php">CI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sns">
                <ul>
                    <li>
                        <a href="http://twitter.com">
                            <img src="images/common/panel_twitter.png" alt="트위터 아이콘">
                        </a>
                    </li>
                    <li>
                        <a href="http://facebook.com">
                            <img src="images/common/panel_facebook.png" alt="페이스북 아이콘">
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com">
                            <img src="images/common/panel_instagram.png" alt="인스타그램 아이콘">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="panelBg"></div>
        <header>
            <div class="menu">
                <a href="#panel_open">
                    <img src="images/common/header_menu_icon.png" alt="패널 열기 버튼">
                </a>
            </div>
            <h1>
                <a href="index.php">
                    <img src="images/common/header_logo.png" alt="G.I.F 로고">
                </a>
            </h1>
            <div class="ticket">
                <a href="#">
                    <img src="images/common/header_ticket_icon.png" alt="예매한 티켓 보러가기 아이콘">
                </a>
            </div>
        </header>
        <main>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide01"></div>
                    <div class="swiper-slide slide02"></div>
                    <div class="swiper-slide slide03"></div>
                    <div class="swiper-slide slide04"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </main>
        <div id="ranking">
            <h2>영화순위</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="movie/current.php">
                            <img src="images/main/ranking_poster01.png" alt="에듀케이션 영화 포스터">
                            <h4>1</h4>
                        </a>
                        <div class="txtWrap">
                            <h3>에듀케이션</h3>
                            <p>예매율 23.8% · 평점 <i>3.9</i></p>
                            <button type="button" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="movie/current.php">
                            <img src="images/main/ranking_poster02.png" alt="잔칫날 영화 포스터">
                            <h4>2</h4>
                        </a>
                        <div class="txtWrap">
                            <h3>잔칫날</h3>
                            <p>예매율 20.8% · 평점 <i>3.4</i></p>
                            <button type="button" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="movie/current.php">
                            <img src="images/main/ranking_poster03.png" alt="내언니전지현과 나 영화 포스터">
                            <h4>3</h4>
                        </a>
                        <div class="txtWrap">
                            <h3>내언니전지현과 나</h3>
                            <p>예매율 15.2% · 평점 <i>3.6</i></p>
                            <button type="button" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="movie/current.php">
                            <img src="images/main/ranking_poster04.png" alt="겨울밤에 영화 포스터">
                            <h4>4</h4>
                        </a>
                        <div class="txtWrap">
                            <h3>겨울밤에</h3>
                            <p>예매율 10.1% · 평점 <i>3.0</i></p>
                            <button type="button" onclick="location.href='ticket/ticketing.php'">예매하기</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="guide">
            <ul>
                <li>
                    <a href="ticket/ticketing.php">
                        <img src="images/main/guide_icon01.png" alt="예매안내 아이콘">
                        <p>예매안내</p>
                    </a>
                </li>
                <li>
                    <a href="ticket/schedule.php">
                        <img src="images/main/guide_icon02.png" alt="영화시간표 아이콘">
                        <p>영화시간표</p>
                    </a>
                </li>
                <li>
                    <a href="tnav/confirm.php">
                        <img src="images/main/guide_icon03.png" alt="예매확인 아이콘">
                        <p>예매확인</p>
                    </a>
                </li>
                <li>
                    <a href="community/event.php">
                        <img src="images/main/guide_icon04.png" alt="할인안내 아이콘">
                        <p>할인안내</p>
                    </a>
                </li>
                <li>
                    <a href="introduce/map.php">
                        <img src="images/main/guide_icon05.png" alt="오시는길 아이콘">
                        <p>오시는길</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="event">
            <h2>이벤트</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn01.png" alt="카카오뱅크 체크카드 할인 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn02.png" alt="친환경 영화관람 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn03.png" alt="재개봉 전용관 오픈 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn04.png" alt="연인과 함께라면 팝콘이 1+1 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn05.png" alt="신년 소원 빌기 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn06.png" alt="내맘대로 생 맥주통 이벤트">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="community/event.php">
                            <img src="images/main/event_bn07.png" alt="통큰 팝콘할인 이벤트">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="notice">
            <h2>공지사항</h2>
            <ul>
                <li>
                    <a href="community/notice.php">#SaveOurCinema #독립예술영화관후원</a>
                    <p>2021-01-01</p>
                </li>
                <li>
                    <a href="community/notice.php">광주독립영화관 할인 이벤트 안내</a>
                    <p>2020-12-24</p>
                </li>
                <li>
                    <a href="community/notice.php">[긴급] 거리두기 2.5단계 격상에 따른 시간표 변경 안내</a>
                    <p>2020-12-10</p>
                </li>
            </ul>
        </div>
        <div id="customer">
            <ul>
                <li>
                    <a href="customer/faq.php">
                        <img src="images/main/customer_icon01.png" alt="고객센터 아이콘">
                        <p>고객센터</p>
                    </a>
                </li>
                <li>
                    <a href="customer/faq.php">
                        <img src="images/main/customer_icon02.png" alt="Q&A 아이콘">
                        <p>Q&amp;A</p>
                    </a>
                </li>
                <li>
                    <a href="customer/person.php">
                        <img src="images/main/customer_icon03.png" alt="1:1문의 아이콘">
                        <p>1:1문의</p>
                    </a>
                </li>
                <li>
                    <a href="customer/lost.php">
                        <img src="images/main/customer_icon04.png" alt="분실신고 아이콘">
                        <p>분실신고</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="org">
            <h2>유관단체</h2>
            <ul>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn01.png" alt="광주독립영화협회">
                    </a>
                </li>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn02.png" alt="광주여성영화제">
                    </a>
                </li>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn03.png" alt="잇다">
                    </a>
                </li>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn04.png" alt="필름에이지">
                    </a>
                </li>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn05.png" alt="m시네마라운지">
                    </a>
                </li>
                <li>
                    <a href="org/familysite.php">
                        <img src="images/main/org_bn06.png" alt="한국애니메이션협회">
                    </a>
                </li>
            </ul>
        </div>
        <footer>
            <div class="fNav">
                <ul>
                    <li><a href="#null">이용약관</a></li>
                    <li><a href="#null">개인정보처리방침</a></li>
                    <li><a href="http://cinema68888.dothome.co.kr?move_pc_screen=1">PC버전</a></li>
                </ul>
            </div>
            <div class="tel">ARS) <a href="tel:1544-0070">1544-0070</a></div>
            <address>
                대표자명 홍길동 · 사업자등록번호 211-86-59478<br>
                · 통신판매업신고번호 제 833호<br>
                &copy; GwangjuIndipendentFilm, Inc. 
            </address>
        </footer>
    </body>
</html>


























