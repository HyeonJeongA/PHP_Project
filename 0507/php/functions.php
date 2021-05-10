<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Function</h1>
<?php
    function sum($x, $y){
        $result = $x + $y; //지역 변수
        return $result;
    }
    $result=sum(10,20); //전역 변수
    echo $result;
?>

<h2>배열 출력</h2>
<?php
    $fruits=[
        'apple',
        'mango',
        'banana',
        'orange'
    ];
    
    function output($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
    output($fruits);
?>

<h2>지역변수 vs. 전역변수</h2>
<?php
    function myfunc(){
        $var=10;
        echo "${var}"; //지역 변수로서, 함수 외부에서 출력 X
    }
    myfunc();
    //echo "${var}";  오류남
?>
<hr>
<?php
    $var2=20;
    function myfunc2(){
        global $var2;
        echo "{$var2}";
        echo "{$GLOBALS['var2']}";
    }
    myfunc2();
?>

<h2>정적 변수</h2>
<?php
    function increment(){
        static $count=0;
        echo "{$count}<br/>";
        $count++;
    }
    increment();
    increment();
    increment();
?>
    
</body>
</html>