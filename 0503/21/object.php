<h1>Object</h1>
<?php
$file = new SplFileObject('data.txt', 'r+');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite(rand(1,100));

$file2 = new SplFileObject('data2.txt', 'r+');
var_dump($file2->isFile());
var_dump($file2->isDir());
var_dump($file2->fread($file2->getSize()));
$file2->fwrite(rand(1,100));
// SplFileObject : Class
// $file, $file2 : Instance
// isFile, isDir, fread : Method(function)
// data.txt, data2.txt : state
?>