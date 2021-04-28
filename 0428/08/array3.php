<?php
function get_members() {
    return ['egoing', 'k8805', 'sorialigi'];
}

$members = get_members();

for($i=0; $i<count($members); $i++){
    echo ucfirst($members[$i])."<br />";
}
?>