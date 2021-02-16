<?
    //아직 로그인을 하지 않았다면
    if(!$userid){
        ?>
        <ul>
            <li class="close">
                <a href="#close_panel">
                    <img src="../images/common/panel_close_icon.png" alt="패널 닫기 버튼">
                </a>
            </li>
            <li>
                <a href="../tnav/login.php"><span>로그인</span> 후 이용하세요!</a>
            </li>
            <li class="home">
                <a href="../index.php">
                    <img src="../images/common/panel_home_icon.png" alt="홈으로 아이콘">
                </a>
            </li>
        </ul>
        <?
    }else{ //로그인을 했다면
        ?>
        <ul>
            <li class="close">
                <a href="#close_panel">
                    <img src="../images/common/panel_close_icon.png" alt="패널 닫기 버튼">
                </a>
            </li>
            <li>
                <a href="../tnav/login.php"><span>로그아웃</span> <?=$username?>님</a>
            </li>
            <li class="home">
                <a href="../index.php">
                    <img src="../images/common/panel_home_icon.png" alt="홈으로 아이콘">
                </a>
            </li>
        </ul>
        <?
    }
?>
                       

                       