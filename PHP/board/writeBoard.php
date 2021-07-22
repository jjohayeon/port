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
                <div class="writeBoard">
                    <h2>게시글을 작성해주세요!!</h2>
                    <form action="saveBoard.php" name="boardWrite" method="post">
                        <fieldset>
                            <legend class="sr-only">게시판 작성 영역입니다.</legend>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" id="boardTitle" class="title-text" required autofocus placeholder="제목을 입력해주세요!" />
                            </div>
                            <div>
                                <label for="boardCont">내용</label>
                                <textarea type="text" name="boardContents" id="boardCont" class="title-text" rows="13" required placeholder="내용을 작성해주세요!!"></textarea>
                            </div>
                            <button class="writeBoardBtn" type="submit" value="저장하기">저장하기</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>