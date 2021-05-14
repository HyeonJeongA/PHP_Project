<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css?after">
    <title>글쓰기</title>
</head>
<body>
    <h1 class="com_h1">글쓰기</h1>
    <form action="insert.php" method="post" class="write_form">
        <p>
            <label for="name">이름 : </label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="message">메시지 : </label>
            <textarea name="message" id="message" cols="100" rows="30"></textarea>
        </p>
        <input type="submit" class="write_btn" value="글쓰기">
        <p class="com_back"><a href="main.php">메인화면으로 돌아가기</a></p>
    </form>
    
</body>
</html>