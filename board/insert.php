<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>글쓰기 결과</title>
</head>
<body>
    <div class="insert">
    <?php
    $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
    if(!$conn){
        echo 'db에 연결하지 못했습니다. '.mysqli_connect_error();
    }

    $user_name = $_POST['name'];
    $user_msg = $_POST['message'];

    $sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";
    $result = mysqli_query($conn, $sql);

    if($result === false){
        echo '저장하지 못했습니다.';
        error_log(mysqli_error($conn));
    }else{ 
        echo '저장 성공!!';
    }

    mysqli_close($conn);
    ?>

    </div>

    <p class="com_back"><a href="main.php">메인화면으로 돌아가기</a></p>
</body>
</html>