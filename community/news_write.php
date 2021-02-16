<? 
    include "../lib/session.php";

    //DB연결
    include "../lib/dbconn.php";
    $table = "news";
    $mode = $_GET['mode'];
    $page = 1;

    //수정모드이면 - 데이터를 조회해서 각각 변수에 데이터를 담아라
    if ($mode == "modify"){
        $table = $_GET['table'];
        $num = $_GET['num'];
        $page = $_GET['page'];
        
		$sql = "SELECT * FROM $table WHERE num=$num";
        
		$result = mysqli_query($connect, $sql);
    
		$row = mysqli_fetch_assoc($result);
	
		$item_subject     = $row['subject'];
		$item_content     = $row['content'];
		$item_name     = $row['name'];
        
		$item_file_0 = $row['file_name_0'];
		$item_file_1 = $row['file_name_1'];

		$copied_file_0 = $row['file_copied_0'];
		$copied_file_1 = $row['file_copied_1'];
	}
?>
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
        <link rel="stylesheet" href="../css/notice.css">
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/write.js"></script>
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
        <div id="subBox">
            <div id="subContents">
            <?php
                //만약 수정모드면
                if($mode=="modify"){
            ?>
                <!--글작성폼 : enctype="multipart/form-data" 파일업로드를 위해 반드시 작성-->
                <form id="boardWrite" name="board_form" method="post" action="insert02.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 

            <?php
                }else{//그냥 글쓰기면
            ?>
                <form id="boardWrite" name="board_form" method="post" action="insert02.php?table=<?=$table?>" enctype="multipart/form-data">
            <?php
                }
            ?> 
                <table>
                    <caption>글쓰기 테이블</caption>
                    <tr class="top">
                        <th>작성자</th>
                        <td><?=$username?></td>
                        <th>HTML 쓰기</th>
                        <td>
                            <input type="checkbox" name="html_ok" id="htmlOk" value="y">
                            <label for="htmlOk">HTML 쓰기</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeTitle">제목</label>
                        </th>
                        <td colspan="3">
                            <?
                                if($mode == "modify"){
                            ?>
                            <input type="text" name="subject" id="noticeTitle" value="<?=$item_subject?>">
                            <?
                                }else{
                            ?>
                            
                            <input type="text" name="subject" id="noticeTitle">
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeContent">내용</label>
                        </th>
                        <td colspan="3">
                            <?
                                if($mode == "modify"){
                            ?>
                            <textarea name="content" id="noticeContent" rows="20"><?=$item_content?></textarea>
                            <?
                                }else{
                            ?>
                            <textarea name="content" id="noticeContent" rows="20"></textarea>
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeFile01">첨부파일1</label>
                        </th>
                        <td colspan="3">
                            <input type="file" name="upfile[]" id="noticeFile01">
                            <? 	
                                if ($mode=="modify" && $item_file_0){
                            ?>
                                <input type="checkbox" name="del_file[]" id="deleteFile01" value="0"> <label for="deleteFile01">삭제</label>
                            
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="noticeFile02">첨부파일2</label>
                        </th>
                        <td colspan="3">
                            <input type="file" name="upfile[]" id="noticeFile02">
                            <?	
                                if ($mode=="modify" && $item_file_0){
                            ?>
                                <input type="checkbox" name="del_file[]" id="deleteFile02" value="0"> <label for="deleteFile02">삭제</label>
                            <?
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                <div class="btnWrap">
                    <a href="#" class="submitBtn" onclick="check_input()">등록</a>
                    <a href="news.php?table=<?=$table?>&page=<?=$page?>" class="listBtn">목록</a>
                </div>
            </form>
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


























