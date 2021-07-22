<?php 
    include '../connect/connect.php';
    include '../connect/session.php';
    // include '../connect/checkSession.php';
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>
    <!-- meta -->
    <?php
        include "../component/meta.php";
    ?>
    <!-- //meta -->
</head>
<body class="light">
    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->
    <!-- header -->
    <?php
        include "../component/header.php";
    ?>
    <!-- //header -->
    <!-- 
        1. 게시판 테이블 만들기 
        2. 게시판 데이터 등록 페이지(writeBoard.php)
        3. 게시판 데이터 저장 페이지(saveBoard.php)
        4. 게시판 데이터 불러오기 페이지(board.php)
    -->
    <!-- main -->
    <main id="main">
        <section id="boardCont">
            <div class="container">
                <div class="saveBoard">
                    <?php 
                        $boardTitle = $_POST['boardTitle'];
                        $boardContent = $_POST['boardContent'];

                        if($boardTitle != null && $boardTitle !=''){
                            $boardTitle = $dbConnect -> real_escape_string($boardTitle);
                        }

                        if($boardContents != null && $boardContents !=''){
                            $boardContents = $dbConnect -> real_escape_string($boardContents);
                        }

                        $myMemberID = $_SESSION['myMemberID'];
                        $regTime = time();

                        $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardCont, regTime) "; 
                        $sql .= "VALUES('{$myMemberID}','{$boardTitle}','{$boardContent}','{$regTime}')";
                        $result = $dbConnect -> query($sql);

                        if($result){
                            echo "<div class='info'>저장이 완료되었습니다.<a href='board.php'>게시판 목록으로 이동하기</a> </div>";
                        } else {
                            echo "<div class='info'>저장이 실패되었습니다.<a href=''>게시글 쓰기</a></div>";
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>