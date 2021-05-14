<?php
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
        if(!$conn){
            echo 'db에 연결하지 못했습니다. '.mysqli_connect_error();
        } 
        $view_num = $_GET['number'];
        $sql = "SELECT * FROM msg_board WHERE number = $view_num";
        $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>글 보기</title>
</head>
<body>
    <h1 class="com_h1">글 내용</h1>
    <?php
    if($row = mysqli_fetch_array($result)){
    ?>
    <h3 class="view_h3">글 번호 :  <?= $row['number'] ?> /글쓴이 : <?= $row['name'] ?></h3>
    <div class="view_msg">
        <?= $row['message'] ?>
    </div>
    <?php } ?>
    <p class="com_back"><a href="main.php">메인화면으로 돌아가기</a></p>
</body>
</html>