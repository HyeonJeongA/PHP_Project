<?php
    session_start();
    $_SESSION['city']= 'Seoul';
    $_SESSION['gu']='Jongro';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션</title>
</head>
<body>
<?php
    echo '세션이 등록되었습니다.';
    if(!isset($_SESSION['city'])){
        echo '세션이 등록되어 있지 않습니다.';
    } else{
        echo $_SESSION['city'].'세션이 등록되어 있다.';
        print_r($_SESSION);
    }
?>
    
</body>
</html>