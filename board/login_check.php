<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>로그인 오류</title>
</head>
<body>
<div class="check">
<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost", "root", "111111", "test");

$check="SELECT * FROM user_info WHERE id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['password']==$password){
        $_SESSION['id']=$id;
        if(isset($_SESSION['id']))
        {
            header('Location:index.php');
        }
        else{
            echo "<p>세션 저장 실패</p>";
            echo "<a href=login.html>Click -> Back Page</a>";
        }
    }
    else{
        echo "<p>Wrong ID or PASSWORD</p>";
        echo "<a href=login.html>Click -> Back Page</a>";
    }
}
else{
    echo "<p>Wrong ID or PASSWORD</p>";
    echo "<a href=login.html>Click -> Back Page</a>";
}
?>
</div>
</body>
</html>


