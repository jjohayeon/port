<?php 
    // setcookie('myCookie', 'cookie', time()+10000,'/');

    // if( isset($_COOKIE['myCookie'])){
    //     echo "cookie O <br>";
    //     echo "{$_COOKIE['myCookie']}";
    // } else {
    //     echo "cookie X";
    // }

    setcookie( 'myCookie', null, time()-1000, '/');

    if( isset($_COOKIE['myCookie'])){
        echo "cookie O <br>";
    } else {
        echo "cookie X";
    }
?>
