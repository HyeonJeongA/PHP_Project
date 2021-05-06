<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <h2>for 반복문</h2>
    <?php
        $fruits = array('apple', 'banana', 'orange');
        for($i=0; $i<count($fruits); $i++){
            echo $fruits[$i].'<br/>';
        }
    ?>
    <h2>foreach 반복문</h2>
    <?php
        foreach($fruits as $item){
            echo $item.'<br/>';
        }
    ?>

    <h2>연관 배열 Associative Array</h2>
    <?php
    /*
        $prices=array();
        $prices['apple']=1000;
        $prices['banana']=2000;
        $prices['orange']=1500;
    */

        $prices=array('apple'=>1000, 'banana'=>2000, 'orange'=>1500);

        foreach($prices as $key => $price){
            echo $key. " _ ".$price.'<br/>';
        }
    ?>


</body>
</html>