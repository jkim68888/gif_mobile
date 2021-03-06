<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Q&amp;A - G.I.F</title>
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
                <li class="active"><a href="faq.php">Q&amp;A</a></li>
                <li><a href="person.php">1:1문의</a></li>
                <li><a href="lost.php">분실물신고</a></li>
            </ul>
        </div>
        <div id="faqBox">
            <div class="searchBox">
                <input type="search" placeholder="궁금한 사항을 입력해주세요." id="searchQA">
                <label for="searchQA" class="away">Q&amp;A 입력상자</label>
                <a href="#null"><img src="../images/customer/search_icon_hover.png" alt="검색 아이콘"></a>
            </div>
            <div class="faqWrap">
                <div class="tabBar">
                    <ul>
                        <li>
                            <a href="#move_tab">
                                <p class="member">회원가입탈퇴</p>
                            </a>
                        </li>
                        <li>
                            <a href="#move_tab">
                                <p>회원혜택</p>
                            </a>
                        </li>
                        <li>
                            <a href="#move_tab">
                                <p>결제방법</p>
                            </a>
                        </li>
                        <li>
                            <a href="#move_tab">
                                <p>이용후기</p>
                            </a>
                        </li>
                        <li>
                            <a href="#move_tab">
                                <p>기타</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="tab01">
                        <ul>
                            <li><a href="#">Q. 회원가입시 기입하는 정보는 누구에게 제공되나요?</a></li>
                            <li><a href="#">Q. 회원탈퇴 후 재가입이 가능한가요?</a></li>
                            <li><a href="#">Q. 회원탈퇴시 홈페이지 사용기록이 없어지나요?</a></li>
                            <li><a href="#">Q. 회원탈퇴는 어떻게 하나요?</a></li>
                            <li><a href="#">Q. 회원정보를 변경하려면 어떻게 하나요?</a></li>
                            <li><a href="#">Q. 해외거주중인데 회원가입할 수 있나요?</a></li>
                            <li><a href="#">Q. 외국인도 회원가입이 가능한가요?</a></li>
                        </ul>
                    </div>
                    <div class="tab02">
                        <ul>
                            <li><a href="#">Q. 비회원예매와 회원예매의 차이점이 무엇인가요?</a></li>
                            <li><a href="#">Q. 회원이 되면 할인혜택이 있나요?</a></li>
                            <li><a href="#">Q. 회원등급은 어떻게 나눠지나요?</a></li>
                            <li><a href="#">Q. 회원에게 제공되는 특별한 혜택은 무엇인가요?</a></li>
                            <li><a href="#">Q. 회원 멤버십이 있나요?</a></li>
                        </ul>
                    </div>
                    <div class="tab03">
                        <ul>
                            <li><a href="#">Q. 결제수단에는 무엇이 있나요?</a></li>
                            <li><a href="#">Q. 결제수단을 바꾸고 싶어요!</a></li>
                            <li><a href="#">Q. 결제취소는 어떻게 하나요?</a></li>
                            <li><a href="#">Q. 결제취소 후 지불했던 돈은 언제 입금되나요?</a></li>
                        </ul>
                    </div>
                    <div class="tab04">
                        <ul>
                            <li><a href="#">Q. 영화를 보고 난 후 리뷰를 작성할 수 있나요?</a></li>
                            <li><a href="#">Q. 리뷰 작성 후 수정은 어떻게 하나요?</a></li>
                        </ul>
                    </div>
                    <div class="tab05">
                        <ul>
                            <li><a href="#">Q. 고객센터를 방문하고 싶어요!</a></li>
                            <li><a href="#">Q. 고객센터 연결이 안되요!</a></li>
                            <li><a href="#">Q. 고객센터 상담사님이 불친절해요!</a></li>
                            <li><a href="#">Q. 건의사항이 있습니다.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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


























