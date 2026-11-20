<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//    $zm=765;
//    if($zm>=3){
//        echo "3";
//    }else if($zm==2){
//        echo "2";
//    }else if($zm==4){
//        echo "4";
//    }else{
//        echo "inna";
//    }

    $zmienna = 1;
    switch ($zmienna) {
        case "1":{
            echo "1";
            break;
        }
        case 2:{
            echo "2";
            break;
        }
        case 3:{
            echo "3";
            break;
        }
        case 4:{
            echo "4";
        }
        case 5:{
            echo "5";
            break;
        }
        default:{
            echo "inna";
            break;
        }
    }
?>

<form action="./script.php" method="post">
    <input type="text" name="test" id="">
    <input type="submit" value="wyslij">
</form>
<form action="" method="get">
    <input type="text" name="test" id="">
    <input type="submit" value="wyslij">
</form>
<?php
    var_dump($_POST);
?>
</body>
</html>