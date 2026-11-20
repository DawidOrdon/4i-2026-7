<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="set_cookie.php">ustaw</a>
<?php
    if(isset($_COOKIE['czekoladowe'])){
        setcookie("czekoladowe", $_COOKIE['czekoladowe']+1, time() + 3600);
        echo $_COOKIE['czekoladowe'];
    }else{
        setcookie("czekoladowe", 1, time() + 3600);
    }
 ?>
</body>
</html>