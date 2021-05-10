<?php
    $title='login';
    include_once('../inc/header.php');
?>

<form action="request.php" method="post"> <!-- get=주소에 노출됨. post=주소에 안나타남 -->
    <p>
        <label for="userName">Name</label>
        <input type="text" name="username" id="userName">
    </p>
    <p>
        <label for="userEmail">Email</label>
        <input type="email" name="useremail" id="userEmail">
    </p>
    <p><input type="submit" value="로그인"></p>

</form>

<?php
    include('../inc/footer.php');
?>