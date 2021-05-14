<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>글 삭제 결과</title>
</head>
<body>
    <h1 class="com_h1">삭제 결과</h1>
    <ul class="del_ul">
    <?php
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
        if(!$conn){
            echo 'db에 연결하지 못했습니다. '.mysqli_connect_error();
        }
        
        $user_delnum = $_POST['delnum'];
        $sqlDEL = "DELETE FROM msg_board WHERE number=  $user_delnum";
        mysqli_query($conn, $sqlDEL);

        $sql = "SELECT * FROM msg_board";
        $result = mysqli_query($conn, $sql);
        $list = ' ';
        
        while($row = mysqli_fetch_array($result)) {
            $list = $list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
        }
        echo $list;
        mysqli_close($conn);
    ?>
    </ul>
    <p class="del_p">
    <?php
        echo $user_delnum.'번째 데이터가 삭제되었습니다.';
    ?>
    </p>
    <p class="com_back"><a href="main.php">메인화면으로 돌아가기</a></p>
    
</body>
</html>