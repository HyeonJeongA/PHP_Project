<?php
    $title='home';
    include('../inc/header.php'); //오류가 있어도 뒤에 출력
    //include('../inc/header.php'); 두번 출력됨.
    // include_once('../inc/header.php');  //무조건 한번만 출력됨.
    require('../inc/header.php'); //오류가 있으면 뒤에 출력 안됨.
    //require('../inc/header.php'); 두번 출력 안됨. 그래서 오류남.
    //require_once('../inc/header.php'); 무조건 한번만 출력됨.
?>
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
    
<?php
    include('../inc/footer.php');
?>
</body>
</html>