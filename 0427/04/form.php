<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
    li{
        list-style:none;
    }

    .loginbox{
        margin:0;
        padding:0;
    }

    form{
        width:400px;
    }
    </style>
</head>
<body>
    <form method="get" action="get.php">
        <fieldset>
            <legend>회원 로그인</legend>
                <ul class="loginbox">
                    <li>
                        <label for="id">아이디</label>
                        <input type="text" name="id" />
                    </li>
                    <li>
                        <label for="pwd">패스워드</label>
                        <input type="text" name="password" />
                    </li>
                    <li>
                        <input type="submit" value="전송">
                    </li>
                </ul>
        </fieldset>
    </form>
</body>
</html>