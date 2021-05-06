<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        $fruits=array();
        $fruits[0]='apple';
        $fruits[1]='banana';
        $fruits[2]='orange';

        if(isset($fruits[3])){  //isset(변수명, 변수명)= 세팅이 되어있냐 
            echo $fruits[3];
        } else{
            echo '과일 배열에는 세번째 값이 없다.';
        }
    ?>
    
</body>
</html>