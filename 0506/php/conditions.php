<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <?php
    /*&& = and 둘 다 참일 때 true
    || = or 둘 중 하나만 참 true
    xor = 둘 중 서로 다르면 참 true*/
    $first_name='delay';
    $last_name='kim';

    if($first_name=='Delay' || $last_name=='kim'){
        echo '조건은 정말 참이다.';
    } else{
        echo '조건은 정말 거짓이다.';
    }
    ?>
    
</body>
</html>