
<header id="header">
        <div class="port">
            <a href="../pages/portfolio.html">port</a>
        </div>
        <div class="logo">
            <a href="../pages/main.html">zzo_oha</a>
        </div>
        <div class="nav">
            <ul>
                <?php 
                    if( isset($_SESSION['myMemberID']) ){?>
                        <li class="line"><?=$_SESSION['youNickName'] ?>님 환영합니다.</li>
                        <li><a href="../sign/logOut.php">로그아웃</a></li>
                <?php } else { ?>
                        <li><a href="../sign/signUp.php">회원가입</a></li>
                        <li><a href="../sign/logIn.php">로그인</a></li>
                <?php } ?>
                
                <li><a href="../board/writeBoard.php">글쓰기</a></li>
                <li><a href="../board/board.php">게시판</a></li>
            </ul>
            <ul>
                <li><a href="../pages/about.html">About</a></li>
                <li><a href="../pages/reference.html">Reference</a></li>
                <li><a href="../pages/youtube.html">Youtube</a></li>
                <li><a href="../pages/script.html">Script</a></li>
                <li><a href="../pages/contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- //header -->$_COOKIE