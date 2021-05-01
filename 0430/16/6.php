<?php

$str='foobar:2008';

preg_match('/(?P<name>\w+): (?P<digit>\d)/', $str, $matches);

print_r($matches);
?>