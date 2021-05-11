<?php
header("Content-Type:text/html;charset=utf-8");

$id=$_POST['id'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$name=$_POST['name'];
$email=$_POST['email'];

if($password!=$rpassword){ //비밀번호 확인
    echo "비밀번호와 비밀번호 확인이 서로 다릅니다.";
    echo "<a href=signup.html>Back Page</a>";
    exit();
}

if($id==NULL || $password==NULL || $rpassword==NULL || $name==NULL || $email==NULL){ //회원정보 빈칸 확인
    echo "빈칸을 모두 채워주세요";
    echo "<a href=signup.html>Back Page</a>";
    exit();
}

$mysqli=mysqli_connect("localhost", "root", "111111", "test");

$check="SELECT * FROM user_info WHERE id='$id'";
$result=$mysqli->query($check);

if($result->num_rows==1){ //id 중복 확인
    echo "중복된 id입니다.";
    echo "<a href=signup.html>Back Page</a>";
    exit();
}

$signup=mysqli_query($mysqli, "INSERT INTO user_info(id, password, name, email) VALUES ('$id', '$password', '$name', '$email')");
if($signup){
    echo "Sign Up Success!!";
    echo "<a href=index.php>Back Page</a>";
}
?>