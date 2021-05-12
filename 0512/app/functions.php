<?php
function view($name, $model){
    global $title;
    require("view/layout.view.php");
}

function get_data(){
    $fname=CONFIG['data_file'];
    $json=' ';
    if(!file_exists($fname)){
        file_put_contents($fname, ' ');
        // $handle=fopen("$fname", "w+");
        // fclose($handle);
    } else{
        $json=file_get_contents($fname);
        //$handle=fopen("$fname", "r");
        //$json=fread($handle, filesize($filename));
    }

    return $json;
}
?>