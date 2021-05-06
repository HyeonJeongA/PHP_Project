<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array2</title>
</head>
<body>
    <h1>Array2</h1>
    <?php
        $fruits=array('apple', 'banana', 'orange');

        for($i=0; $i<count($fruits); $i++){
            echo $fruits[$i].'<br/>';
        }
    ?>
    
</body>
</html>