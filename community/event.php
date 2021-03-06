<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>이벤트 - G.I.F</title>
        <link rel="shortcut-icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/event.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
    </head>
    <body>
        <div class="panel">
            <div class="pTop">
                <? include "../lib/top_nav_sub.php"; ?>
            </div>
            <div class="topNav">
                <ul>
                    <li><a href="../tnav/join.php">회원가입</a></li>
                    <li><a href="../tnav/nonMember.php">비회원 예매확인</a></li>
                </ul>
            </div>
            <div class="gnb01">
                <ul class="first">
                    <li>
                        <a href="../movie/current.php">
                            <img src="../images/common/panel_movie_icon.png" alt="영화 아이콘">
                            <p>영화</p>
                        </a>
                    </li>
                    <li class="ticket">
                        <a href="../ticket/ticketing.php">
                            <img src="../images/common/panel_ticketing_icon.png" alt="예매 아이콘">
                            <p>예매</p>
                        </a>
                    </li>
                    <li class="mypage">
                        <a href="../tnav/join_form_modify.php">
                            <img src="../images/common/panel_mypage_icon.png" alt="마이페이지 아이콘">
                            <p>마이페이지</p>
                        </a>
                    </li>
                </ul>
                <ul class="last">
                    <li>
                        <a href="../introduce/about.php">
                            <img src="../images/common/panel_independent_icon.png" alt="독립영화 아이콘">
                            <p>독립영화</p>
                        </a>
                    </li>
                    <li class="map">
                        <a href="../introduce/map.php">
                            <img src="../images/common/panel_map_icon.png" alt="오시는길 아이콘">
                            <p>오시는길</p>
                        </a>
                    </li>
                    <li>
                        <a href="../customer/faq.php">
                            <img src="../images/common/panel_customer_icon.png" alt="고객센터 아이콘">
                            <p>고객센터</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="gnb02">
                <ul>
                    <li>
                        <a href="notice.php" class="mainNav">커뮤니티</a>
                        <ul class="subNav">
                            <li><a href="notice.php">공지사항</a></li>
                            <li><a href="event.php">이벤트</a></li>
                            <li><a href="news.php">언론</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../org/introduce.php" class="mainNav">광주영화영상인연대</a>
                        <ul class="subNav">
                            <li><a href="../org/introduce.php">단체소개</a></li>
                            <li><a href="../org/familysite.php">유관단체</a></li>
                            <li><a href="../org/identity.php">CI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sns">
                <ul>
                    <li>
                        <a href="http://twitter.com">
                            <img src="../images/common/panel_twitter.png" alt="트위터 아이콘">
                        </a>
                    </li>
                    <li>
                        <a href="http://facebook.com">
                            <img src="../images/common/panel_facebook.png" alt="페이스북 아이콘">
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com">
                            <img src="../images/common/panel_instagram.png" alt="인스타그램 아이콘">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="panelBg"></div>
        <header>
            <div class="menu">
                <a href="#panel_open">
                    <img src="../images/common/header_menu_icon.png" alt="패널 열기 버튼">
                </a>
            </div>
            <h2>커뮤니티</h2>
            <div class="ticket">
                <a href="#">
                    <img src="../images/common/header_ticket_icon.png" alt="예매한 티켓 보러가기 아이콘">
                </a>
            </div>
        </header>
        <div id="subTabBox">
            <ul>
                <li><a href="notice.php">공지사항</a></li>
                <li class="active"><a href="event.php">이벤트</a></li>
                <li><a href="news.php">언론</a></li>
            </ul>
        </div>
        <div id="eventBox">
            <ul>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn01.png" alt="카카오뱅크 체크카드 할인이벤트">
                        <h3>카카오 체크카드 결제 혜택</h3>
                        <p>기간: 2020년 12월 20일 ~ 2021년 1월 20일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn02.png" alt="친환경 영화관람 이벤트">
                        <h3>친환경 영화관람 관련 이벤트</h3>
                        <p>기간: 2020년 12월 10일 ~ 2021년 1월 10일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn03.png" alt="재개봉 전용관 오픈 이벤트">
                        <h3>재개봉 전용관 오픈 기념 이벤트</h3>
                        <p>기간: ~ 2021년 2월 28일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn04.png" alt="연인과 함께라면 팝콘이 원 플러스 원 이벤트">
                        <h3>커플 이벤트</h3>
                        <p>기간: 2020년 12월 18일 ~ 2021년 1월 15일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn05.png" alt="신년 소원 빌기 이벤트">
                        <h3>신년 이벤트</h3>
                        <p>기간: 2020년 12월 30일 ~ 2021년 1월 2일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn06.png" alt="내맘대로 생 맥주통 이벤트">
                        <h3>생맥주 이벤트</h3>
                        <p>기간: 2020년 12월 31일 ~ 2021년 2월 22일</p>
                    </a>
                </li>
                <li>
                    <a href="#null">
                        <img src="../images/community/event_bn07.png" alt="통큰 팝콘 할인 이벤트">
                        <h3>통큰 팝콘 할인</h3>
                        <p>기간: 2020년 12월 20일 ~ 2021년 1월 20일</p>
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
            <a href="#null" class="address">
                대표자명 홍길동 · 사업자등록번호 211-86-59478<br>
                · 통신판매업신고번호 제 833호<br>
                &copy; GwangjuIndipendentFilm, Inc. 
            </a>
        </footer>
    </body>
</html>


























