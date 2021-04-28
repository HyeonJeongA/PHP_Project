<html>
<body>
<?php
for($i=0; $i<10; $i++){
    if($i === 5){ //5만 빠지고 출력된다.
        continue;
    }
    echo "coding everybody{$i}<br />";
}
?>
</body>
</html>