<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
if(!isset($_SESSION['id'])){ //로그인 상태가 아닐때
    header('Location:login.html'); //로그인 페이지로 이동
} echo "홈 로그인 성공!"; 

echo "<a href=logout.php>로그아웃</a>";  //로그아웃 링크도 출력
?>
