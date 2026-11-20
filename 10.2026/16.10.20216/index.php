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
<?php
//    for($i = 0; $i<100;){
//        echo $i."<br />";
//        if($i%3==0){
//            $i+=2;
//        }else{
//            $i+=1;
//        }
//        echo $i."<br />";
//    }
    $i=1110;
    while($i<=100){
        echo $i."<br />";
        $i++;
    }
    $i=1110;
    do{
        echo $i."<br />";
        $i++;
    }while($i<=100);

    $arr=["test"=>1,"test2"=>2];
    foreach($arr as $key=>$value){
        echo $key." ".$value."<br />";
    }
?>
</body>
</html>