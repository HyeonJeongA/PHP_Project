<?php
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches); //@@는 구분자 i는 대소문자를 구분하지 않겠다.
print_r($matches);
$host = $matches[1];

preg_match('/[^.]+\.[^.]+$/', $host,  $matches);
echo "domain name is: {$matches[0]}\n";
?>