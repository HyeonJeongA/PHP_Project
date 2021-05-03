<h2>Function</h2>
<?php
var_dump(is_file('data_txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1, 100));
?>