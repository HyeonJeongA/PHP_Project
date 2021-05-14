<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>검색 결과</title>
</head>
<body>
    <h1 class="com_h1">검색 결과</h1>
    <div class="search_ul">
    <ul>
    <?php
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
        if(!$conn){
            echo 'db에 연결하지 못했습니다. '.mysqli_connect_error();
        } 
        $user_skey = $_POST['skey'];
        $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($conn, $sql);
        $list = ' ';
        
        while($row = mysqli_fetch_array($result)) {
            $list = $list."<li>{$row['number']}: <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
        }
        echo $list;
        mysqli_close($conn);
    ?>
        
        
    </ul>
    </div>
    <p class="com_back"><a href="main.php">메인화면으로 돌아가기</a></p>
    
</body>
</html>