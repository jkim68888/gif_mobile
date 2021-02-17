<?php
    include "../lib/session.php";

    //DB연결
    include "../lib/dbconn.php";
    
    $num = $_GET['num']; //주소표시줄에서 해당글 번호 받음
    $table = $_GET['table']; //주소표시줄에서 테이블명 받기
    $page = $_GET['page']; //주소표시줄에서 페이지번호 받기

    //SQL문
    $sql = "SELECT * FROM $table WHERE num=$num";
    
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);

    //모든 데이터를 각각 변수에 담기
    $item_num     = $row['num'];
	$item_id      = $row['id'];
	$item_name    = $row['name'];
	$item_hit     = $row['hit'];

	$image_name[0]   = $row['file_name_0'];
	$image_name[1]   = $row['file_name_1'];

	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];

    $item_date    = $row['regist_day'];
	$item_subject = str_replace(" ", "&nbsp;", $row['subject']);

	$item_content = $row['content'];
	$is_html      = $row['is_html'];


    //html쓰기가 체크가 안되면 엔터처리가 안되서 되도록 처리
    if($is_html!= "y"){
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}

    //반복문으로 이미지 정보 처리
    for($i=0; $i<2; $i++){
		if ($image_copied[$i]){
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);

			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785){
				$image_width[$i] = 785;
            }
		}else{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

    //뷰로 글을 조회할때마다 조회수가 증가
    $new_hit = $item_hit + 1;
    
    $sql = "UPDATE $table SET hit=$new_hit WHERE num=$num";   // 글 조회수 증가시킴

    mysqli_query($connect, $sql);
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
                <li><a href="event.php">이벤트</a></li>
                <li class="active"><a href="news.php">언론</a></li>
            </ul>
        </div>
        <div id="subBox">
            <div id="subContents">
                <table class="noticeView">
                    <caption>게시글 확인</caption>
                    <tr class="top">
                        <th>제목</th>
                        <td><?= $item_subject ?></td>
                        <th>조회수</th>
                        <td class="last"><?= $item_hit ?> </td>
                        <th>작성자</th>
                        <td><?= $item_name ?> </td>
                        <th>작성일</th>
                        <td class="last"><?= $item_date ?> </td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td colspan="3" class="subtance last">
                            <!--컨텐츠내용가져오기-->

                            <!--1. 이미지를 반복문으로 가져옴-->
                            <?php
                                for($i=0; $i<2; $i++){
                                    if ($image_copied[$i]){
                                        $img_name = $image_copied[$i];
                                        $img_name = "./data/".$img_name;
                                        $img_width = $image_width[$i];

                                        echo "<img src='$img_name' width='$img_width'>"."<br><br>";
                                    }
                                }
                            ?>

                            <!--2. 컨텐츠 내용 가져오기-->
                            <?= $item_content ?>
                        </td>
                    </tr>
                </table>
                <div class="btnWrap">
                    <!--버튼-->

                    <!--1. 목록버튼-->
                    <a href="news.php?table=<?=$table?>&page=<?=$page?>" class="listBtn">목록</a>

                    <!--수정버튼과 삭제버튼 권한 설정-->
                    <?php
                        //글쓴 사람이거나, 관리자거나, 레벨이 1이 되는 사람은 해당글을 삭제하거나 수정할 수 있도록 설정
                        if($userid == $item_id || $userid == "admin" || $userlevel==1 ){
                    ?>

                    <!--2. 수정버튼-->
                    <a href="news_write.php?table=<?=$table?>&mode=modify&num=<?=$item_num?>&page=<?=$page?>" class="modifyBtn">수정</a>

                    <!--3. 삭제버튼-->
                    <a id="delete_btn" class="deleteBtn" href="delete02.php?table=<?=$table?>&num=<?=$item_num?>">삭제</a>&nbsp;

                    <?php
                        }
                    ?>


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


























