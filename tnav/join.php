<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원가입 약관동의 - G.I.F</title>
        <link rel="shortcut-icon" href="../images/common/favicon_16x16.png">
        <link rel="icon" sizes="192x192" href="../images/common/favicon_android_192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/favicon_ios_180x180.png">
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub.css">
        <link rel="stylesheet" href="../css/join.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/join.js"></script>
    </head>
    <body>
        <div class="panel">
            <div class="pTop">
                <? include "../lib/top_nav_sub.php"; ?>
            </div>
            <div class="topNav">
                <ul>
                    <li><a href="join.php">회원가입</a></li>
                    <li><a href="nonMember.php">비회원 예매확인</a></li>
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
                        <a href="join_form_modify.php">
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
            <h2>회원가입</h2>
            <div class="ticket">
                <a href="#">
                    <img src="../images/common/header_ticket_icon.png" alt="예매한 티켓 보러가기 아이콘">
                </a>
            </div>
        </header>
        <div id="subBox">
            <div class="joinFlow">
                <ul>
                    <li class="active">01<br>회원약관동의</li>
                    <li>02<br>회원정보등록</li>
                    <li>03<br>회원가입완료</li>
                </ul>
            </div>
            <div class="joinClause">
                <p class="numTop">01</p>
                <h4>이용약관 (필수)</h4>
                <div class="agreeArea">
                    <h5>제 1 장 총 칙</h5>
                    <h6>제 1 조 (목적)</h6>
                    <div class="agreeP">이 약관은 G.I.F 사이트가 제공하는 모든 서비스(이하 '서비스')의 이용조건 및 절차, 이용자와 G.I.F 사이트의 권리, 의무, 책임사항 과 기타 필요한 사항을 규정함을 목적으로 합니다.</div>
                    <h6>제 2 조 (약관의 효력과 변경)</h6>
                    <div class="agreeP">
                        <ol>
                            <li class="agreeP">1. G.I.F 사이트는 귀하가 본 약관 내용에 동의하는 경우, G.I.F 사이트의 서비스 제공 행위 및 귀하의 서비스 사용 행위에 본 약관이 우선적으로 적용됩니다.</li>
                            <li class="agreeP">2. G.I.F 사이트는 본 약관을 사전 고지 없이 변경할 수 있고, 변경된 약관은 G.I.F 사이트 내에 공지하거나 e-mail을 통해 회원에게 공지하며, 공지와 동시에 그 효력이 발생됩니다. 이용자가 변경된 약관에 동의하지 않는 경우, 이용자는 본인의 회원등록을 취소(회원탈퇴)할 수 있으며 계속 사용의 경우는 약관 변경에 대한 동의로 간주됩니다.</li>
                        </ol>
                    </div>
                    <h6>제 3조 (약관 외 준칙)</h6>
                    <div class="agreeP">
                        <ol>
                            <li class="agreeP">1. 본 약관에 명시되지 않은 사항은 개인정보보호법, 전기통신기본법, 전기통신사업법 등 기타 관련 법령의 규정에 의합니다.</li>
                        </ol>
                    </div>
                    <h6>제 4 조 (용어의 정의)</h6>
                    <div class="agreeP">
                        본 약관에서 사용하는 용어의 정의는 다음과 같습니다.
                        <ol>
                            <li class="agreeP">1. 이용자: 본 약관에 따라 G.I.F 사이트가 제공하는 서비스를 받는 자.</li>
                            <li class="agreeP">2. 가입 : G.I.F 사이트가 제공하는 신청서 양식에 해당 정보를 기입하고, 본 약관에 동의하여 서비스 이용계약을 완료시키는 행위.</li>
                            <li class="agreeP">3. 회원 : G.I.F 사이트에 개인 정보를 제공하여 회원 등록을 한 자로서 G.I.F 사이트가 제공하는 서비스를 이용할 수 있는 자.</li>
                            <li class="agreeP">4. 비밀번호 : 이용자와 회원ID가 일치하는지를 확인하고 통신상의 자신의 비밀보호를 위하여 이용자 자신이 선정한 문자와 숫자의 조합.</li>
                            <li class="agreeP">5. 탈퇴 : 회원이 이용계약을 종료시키는 행위.</li>
                        </ol>
                    </div>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="agreeChk01">
                    <label for="agreeChk01">이용약관에 동의합니다. </label>
                </div>
                <h4>개인정보 수집/이용에 대한 동의 (필수)</h4>
                <div class="agreeArea">
                    <h5>수집하는 개인정보의 항목</h5>
                    <div class="agreeP">
                        <ol>
                            <li class="agreeP">G.I.F은 회원가입, 원활한 고객상담, 각종 서비스 등 기본적인 서비스 제공을 위한 필수정보와 고객 맞춤 서비스 제공을 위한 선택정보로 구분하여 최초 회원가입 시 아래와 같은 최소한의 개인정보를 수집하고 있습니다.</li>
                            <li class="agreeP">- 필수항목 : 이메일, 비밀번호, 이름 , 생년월일, 성별, 주소, 휴대폰</li>
                            <li class="agreeP">- 선택항목 : 직업, 미술계종사여부, 홈페이지 알게된 경로, 가입동기 * 선택정보를 입력하지 않은 경우에도 서비스 이용제한은 없으며 민감한 개인정보(인종, 사상 및 신조, 범죄 및 의료기록 등)는 수집하지 않습니다.</li>
                            <li class="agreeP">서비스 이용과정에서 아래와 같은 정보들이 자동으로 생성되어 수집될 수 있습니다.</li>
                            <li class="agreeP">- 접속 로그 , 쿠키 , 접속 IP 정보, 결제기록</li>
                        </ol>
                    </div>
                    <h6>개인정보의 수집 및 이용 목적</h6>
                    <div class="agreeP">
                        <ol>
                            <li class="agreeP">회원가입 및 서비스 이용 시 본인의 확인</li>
                            <li class="agreeP">G.I.F 전시관람 예약, 교육 수강신청, 문화행사 예약, 정기적인 메일발송</li>
                        </ol>
                    </div>
                    <h6>개인정보의 보유 및 이용기간</h6>
                    <div class="agreeP">G.I.F 홈페이지 회원 정보 보유기간은 2년이며, 이용자가 회원 탈회를 요청하거나 개인정보의 수집·이용 등에 대한 동의를 철회 요청이 있는 경우 해당 개인정보를 즉시 파기합니다.</div>
                    <h6>정보주체의 권리</h6>
                    <div class="agreeP">
                        G.I.F 회원은 자신의 개인정보 처리와 관련하여 아래와 같은 권리를 가집니다.
                        <ol>
                            <li class="agreeP">- 개인정보의 처리 여부를 확인하고 개인정보에 대하여 열람(사본의 발급을 포함한다. 이하 같다)을 요구할 권리</li>
                            <li class="agreeP">- 개인정보의 처리 정지, 정정·삭제 및 파기를 요구할 권리</li>
                            <li class="agreeP">- 개인정보의 처리로 인하여 발생한 피해를 신속하고 공정한 절차에 따라 구제받을 권리</li>
                            <li class="agreeP">권리행사의 방법 및 절차에 대해서는 홈페이지에 게시된 “개인정보처리방침”을 참조하여 주시기 바라며, 우리 미술관은 정보주체의 권리 보장을 위하여 최선을 다하겠습니다.</li>
                        </ol>
                    </div>
                    <h6>동의거부권 및 동의 거부에 따른 불이익</h6>
                    <div class="agreeP">가입자는 개인정보 수집·이용에 대하여 거부할 수 있는 권리가 있습니다. 단, 이에 대한 동의를 거부할 경우에는 회원가입이 불가능합니다.</div>
                </div>
                <div class="checkBox">
                    <input type="checkbox" id="agreeChk02">
                    <label for="agreeChk02">개인정보 수집/이용에 동의합니다.</label>
                </div>
                <div class="allChk">
                    <input type="checkbox" id="allChk">
                    <label for="allChk">모든 약관에 동의합니다.</label>
                </div>
                <div class="nextBtn">
                    <a href="join_form.php">다음</a>
                </div>
            </div>
            <div class="bottomList">
                <h6>이미 회원이신가요?</h6>
                <p>지금 로그인을 통해 홈페이지를 보다 편리하게 이용하세요.</p>
                <a href="login.php">바로가기</a>
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


























