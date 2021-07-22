<?php 
    session_start();

    //세션 생성
    $_SESSION['userID'] = "jjohayeon";

    if(isset($_SESSION['userID'])){
        echo "session : O"
    } else {
        echo "session : X";
    }

    //세션 삭제
    unset($_SESSION['userID']);
?>