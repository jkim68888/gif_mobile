<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>1:1문의 - G.I.F</title>
        <link rel="shortcut-icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/customer.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/customer.js"></script>
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
                        <a href="faq.php">
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
            <h2>고객센터</h2>
            <div class="ticket">
                <a href="#">
                    <img src="../images/common/header_ticket_icon.png" alt="예매한 티켓 보러가기 아이콘">
                </a>
            </div>
        </header>
        <div id="subTabBox">
            <ul>
                <li><a href="faq.php">Q&amp;A</a></li>
                <li class="active"><a href="person.php">1:1문의</a></li>
                <li><a href="lost.php">분실물신고</a></li>
            </ul>
        </div>
        <div id="personBox">
            <form action="#">
                <p class="subscript">
                    <span class="star">*</span>
                    필수입력항목
                </p>
                <table>
                    <caption>문의내용 입력란</caption>
                    <tr>
                        <th>
                            <span class="star">*</span>
                            <label for="name" class="title">이름</label>
                        </th>
                        <td>
                            <input type="text" id="name" placeholder="이름을 입력해주세요." class="nameBox">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span class="star">*</span>
                            <label for="phone01" class="title">휴대폰</label>
                        </th>
                        <td>
                            <select id="phone01" class="phoneBox">
                                <option>010</option>
                                <option>011</option>
                                <option>016</option>
                                <option>017</option>
                                <option>018</option>
                                <option>019</option>
                            </select>
                            -
                            <input type="text" id="phone02" maxlength="4" class="phoneBox">
                            <label for="phone02" class="away">휴대폰 가운데 4자리입력</label>
                            -
                            <input type="text" id="phone03" maxlength="4" class="phoneBox">
                            <label for="phone03" class="away">휴대폰 마지막 4자리입력</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span class="star">*</span>
                            <label for="faqTitle" class="title">문의제목</label>
                        </th>
                        <td class="birth">
                            <input type="text" id="faqTitle" placeholder="제목을 입력해주세요." class="titleBox">
                        </td>
                    </tr>
                    <tr class="last">
                        <th>
                            <span class="star">*</span>
                            <label for="faqContent" class="title">문의내용</label>
                        </th>
                        <td>
                            <textarea name="faq" id="faqContent" cols="30" rows="10" placeholder="내용을 입력해주세요." class="cBox"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="btnWrap">
                    <button type="submit">문의하기</button>
                </div>
            </form>
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


























