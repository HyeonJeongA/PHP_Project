<?php
preg_match('/(?:(?:et|te)(st))/', 'this is etst haha', $match); //정규표현식으로 \(.+\)검색하기
print_r($match);
?>