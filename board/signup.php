<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>회원가입 결과</title>
</head>
<body>
<div class="signup_check">
<?php
header("Content-Type:text/html;charset=utf-8");

$id=$_POST['id'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$name=$_POST['name'];
$email=$_POST['email'];

$mysqli=mysqli_connect("localhost", "root", "111111", "test");

$check="SELECT * FROM user_info WHERE id='$id'";
$result=$mysqli->query($check);

if($result->num_rows==1){ //id 중복 확인
    echo "<p>중복된 id입니다.</p>";
    echo "<a href=signup.html>Click -> Back Page</a>";
    exit();
}

if($password!=$rpassword){ //비밀번호 확인
    echo "<p>비밀번호와 비밀번호 확인이 서로 다릅니다.</p>";
    echo "<a href=signup.html>Click -> Back Page</a>";
    exit();
}

if($id==NULL || $password==NULL || $rpassword==NULL || $name==NULL || $email==NULL){ //회원정보 빈칸 확인
    echo "<p>빈칸을 모두 채워주세요</p>";
    echo "<a href=signup.html>Click -> Back Page</a>";
    exit();
}

$signup=mysqli_query($mysqli, "INSERT INTO user_info(id, password, name, email) VALUES ('$id', '$password', '$name', '$email')");
if($signup){
    echo "<p>Sign Up Success!!</p>";
    echo "<a href=index.php>Click -> Go!!</a>";
}
?>

</div>
</body>
</html>

