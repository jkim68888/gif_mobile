<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>광주영화영상인연대 - G.I.F</title>
        <link rel="shortcut-icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/org.css">
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
                        <a href="../community/notice.php" class="mainNav">커뮤니티</a>
                        <ul class="subNav">
                            <li><a href="../community/notice.php">공지사항</a></li>
                            <li><a href="../community/event.php">이벤트</a></li>
                            <li><a href="../community/news.php">언론</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="introduce.php" class="mainNav">광주영화영상인연대</a>
                        <ul class="subNav">
                            <li><a href="introduce.php">단체소개</a></li>
                            <li><a href="familysite.php">유관단체</a></li>
                            <li><a href="identity.php">CI</a></li>
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
            <h2>광주영화영상인연대</h2>
            <div class="ticket">
                <a href="#">
                    <img src="../images/common/header_ticket_icon.png" alt="예매한 티켓 보러가기 아이콘">
                </a>
            </div>
        </header>
        <div id="subTabBox">
            <ul>
                <li><a href="introduce.php">단체소개</a></li>
				<li class="active"><a href="familysite.php">유관단체</a></li>
				<li><a href="identity.php">CI</a></li>
            </ul>
        </div>
        <div id="familyBox">
            <a href="https://www.facebook.com/gwangju.indif" target="_blank" class="gray">
                <img src="../images/org/logo_img01.jpg" alt="광주독립영화협회 로고 이미지">
                <h3>광주독립영화협회</h3>
                <p>
                    광주독립영화협회는 2009년에 출범했다.
                    영화가 계속해서 만들어지는 토대를 구축하겠다는 취지였다.
                    광주독립영화협회는 2012년 “살아있다”라는 슬로건을 내걸고 광주독립영화제를 1회 개최했던 것을 시작으로 8회 영화제를 치렀다.
                </p>
            </a>
            <a href="http://www.wffig.com/" target="_blank" class="blue">
                <img src="../images/org/logo_img02.jpg" alt="광주여성영화제 로고 이미지">
                <h3>광주여성영화제</h3>
                <p>
                    광주여성영화제는 2010년 1회를 시작으로 매년 11월,
                    ‘여성의 눈으로 보는 세상, 모두를 위한 축제’ 라는 슬로건으로 6일간 여성영화제를 개최하고 있다.
                    영화제 기간 외에도 찾아가는 여성영화 상영회, 영화를 통한 성평등 교육, 여성영화인 제작 지원사업 등을 진행하고 있다.
                </p>
            </a>
            <a href="https://cafe.naver.com/cinemagwangju" target="_blank" class="gray">
                <img src="../images/org/logo_img03.jpg" alt="광주극장 로고 이미지">
                <h3>광주극장</h3>
                <p>
                    1933년 개관한 광주극장은 국내에서 가장 오래된 단관극장 중 하나로 유서 깊은 근대역사유산이자
                    현재는 호남 유일의 예술영화전용관으로서 지역영화문화의 구심점 역할을 하고있다.
                    부속 건물인 ‘영화의 집’에서는 매주 지역 영화인들과 영화애호가들이 참여하는 다양한 테마의 영화 소모임이 운영되고 있다.
                </p>
            </a>
            <a href="http://www.filmage.kr/mobile/" target="_blank" class="blue">
                <img src="../images/org/logo_img04.jpg" alt="필름에이지 로고 이미지">
                <h3>필름에이지</h3>
                <p>
                    광주의 대표적인 영화제작사로 극영화, 뮤직비디오, 광고, 홍보영상 등을 제작한다.
                    지역주민들을 대상으로 정기적인 영화상영회를 통해 지역민들의 문화향유 확대에 기여하고 있으며 지역의 열악한 제작기반을 타개하기 위해 다양한 영화교육프로그램을 운영하고 있다.
                </p>
            </a>
            <a href="http://www.it-da.net/" target="_blank" class="gray">
                <img src="../images/org/logo_img05.jpg" alt="문화콘텐츠그룹 잇다 로고 이미지">
                <h3>문화콘텐츠그룹 잇다</h3>
                <p>
                    잇다와 함께하는 일상이득 라이프! 가치, 사람, 공간, 문화, 참여, 기록과 기억을 ‘잇다’.
                    영상콘텐츠, 교육콘텐츠, 문화콘텐츠의 ‘기획 ▶ 제작 ▶ 운영 ▶ 기록 ▶ 홍보 ▶ 기억’을 위한 크리에이터 그룹 잇다는 아트디렉터,
                    스토리텔러와 프로듀서, 촬영감독, 연출가 등이 동고동락하고 있는 문화콘텐츠그룹입니다.
                </p>
            </a>
            <a href="https://cinemaloungemm.modoo.at/" target="_blank" class="blue">
                <img src="../images/org/logo_img06.jpg" alt="시네마라운지Mm 로고 이미지">
                <h3>시네마라운지Mm</h3>
                <p>
                    1930년대에 건축된 조선미곡창고를 개보수해 탄생한 전남 유일의 독립예술영화관 ‘시네마라운지Mm’은
                    목포에서 접하기 힘들었던 독립, 예술영화를 상영하며
                    영화모임, 영화제작캠프, 국도1호선독립영화제 등 다양한 영상문화활동을 만들어가고 있다.
                </p>  
            </a>
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


























