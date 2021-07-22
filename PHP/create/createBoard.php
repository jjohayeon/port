<?php 
    include '../connect/connect.php';

    $sql = "CREATE TABLE myBoard (";
    $sql .= "myBoardID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "boardTitle varchar(50) NOT NULL,";
    $sql .= "boardCont longtext NOT NULL,";
    $sql .= "regTime int(10) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (myBoardID)";
    $sql .= ") CHARSET=utf8";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "good";
    } else {
        echo "false";
    }
?>