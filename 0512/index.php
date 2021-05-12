<?php
    require('app/app.php');
    $title='Hello world!';
    $data=get_data();
    view('index', $data);
?>