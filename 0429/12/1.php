<?php
echo getcwd().'<br />'; //경로
chdir('../'); //부모디렉토리로 이동
echo getcwd().'<br />';//마지막이 빠진 경로가 나옴
?>