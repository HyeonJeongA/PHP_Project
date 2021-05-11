<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost", "root", "111111", "test");

$check="SELECT * FROM user_info WHERE id='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['password']==$password){
        $_SESSION['id']=$id;
        if(isset($_SESSION['id']))
        {
            header('Location:index.php');
        }
        else{
            echo "세션 저장 실패";
        }
    }
    else{
        echo "wrong id or password";
    }
}
else{
    echo "wrong id or password";
}
?>