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
                        <a href="../tnav/myPage.php">
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
                <li class="active"><a href="introduce.php">단체소개</a></li>
				<li><a href="familysite.php">유관단체</a></li>
				<li><a href="identity.php">CI</a></li>
            </ul>
        </div>
        <div id="introBox">
            <h3>설립년도</h3>
            <p>2017년 4월</p>
            <h3>설립목적</h3>
            <p class="first">
                (사)광주영화영상인연대는 시민 모두가 영화 · 영상 문화 활동에 참여하고<br> 
                향유할 수 있는 환경을 조성하려 힘쓰고 있다.
            </p>
            <p class="last">
                광주여성영화제, 광주독립영화협회, 광주극장, 영화영상 사회적 기업 ㈜필름에이지와 ㈜잇다,<br>
                영화공동체 길동무 그리고 영화연구자 및 광주광역시 시민들이 모여서 창립하였다.
            </p>
            <h3>주요활동내역</h3>
            <table>
                <tr>
                    <th>160628</th>
                    <td>광주국제영화제 문제 해결과 지역영화 활성화 기자 회견 및 퍼포먼스</td>
                </tr>
                <tr>
                    <th>160706</th>
                    <td>광주국제영화제 문제 해결과 지역영화 활성화를 위한 릴레이 1인 시위</td>
                </tr>
                <tr>
                    <th>170406</th>
                    <td>광주영화영상인연대 창립 총회</td>
                </tr>
                <tr>
                    <th>171115</th>
                    <td>독립영화전용관 설립지원 사업 선정(영화진흥위원회)</td>
                </tr>
                <tr>
                    <th>180411</th>
                    <td>광주독립영화관(G.I.F) 개관</td>
                </tr>
                <tr>
                    <th>181018</th>
                    <td>광주영화 도약을 위한 컨퍼런스 개최</td>
                </tr>
                <tr>
                    <th>180830</th>
                    <td>‘광주씨네마클래스’, ‘실험 영화’, ‘비평가 양성과정’ 등 영화 교육 실시</td>
                </tr>
                <tr>
                    <th>190120</th>
                    <td>독립영화전용관 운영지원사업 선정 (영화진흥위원회)</td>
                </tr>
                <tr>
                    <th>190710</th>
                    <td>광주영상영화진흥조례 제정 (광주광역시)</td>
                </tr>
                <tr>
                    <th>190920</th>
                    <td>광주영화비평지 창간 및 발행 (창간준비호, 창간호)</td>
                </tr>
                <tr>
                    <th>200422</th>
                    <td>독립·예술영화 전용상영관 승인 (문화체육관광부)</td>
                </tr>
                <tr>
                    <th>200518</th>
                    <td>광주영화학교 개설(영화 창 · 제작 전체 과정)</td>
                </tr>
            </table>
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


























