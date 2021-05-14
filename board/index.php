<?php
    header("Content-Type:text/html;charset=utf-8");
    session_start();
    
    if(!isset($_SESSION['id'])){ //로그인 상태가 아닐때
        header('Location:login.html'); //로그인 페이지로 이동
    } 
    header('Location:main.php'); //로그인 상태이면 게시판으로 이동
?>
