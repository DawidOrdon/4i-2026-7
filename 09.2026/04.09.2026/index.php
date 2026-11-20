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
        echo"<b>witaj swiecie</b>";
        if(1==2){
            ?>witaj<?php
        }else{
            echo"cos2";
        }
        echo"<br /><br /><br /><pre>";
//        $zmienna=[4,3,2,43,2];
            $zmienna="dsa";
        var_dump($zmienna);
    echo"</pre>";
    if(is_numeric($zmienna)){
        echo "numer";
    }else if (is_string($zmienna)){
        echo "string";
    }else if(is_array($zmienna)){
        echo "array";
    }
    echo"<br /><br /><br />";
    echo 'witaj $zmienna<br />';
    echo "witaj $zmienna<br />";
    echo <<<cos
    test 4 po 4
    dsadas
    cos;
    echo "teskt".$zmienna."testk2"."32".$zmienna;

    $cars=[
            'PSZ8434'=>["marka"=>"fiat","model"=>"126p"],
            'PO4321'=>["marka"=>"opel","model"=>"astra"],
            'PZ43223'=>["marka"=>"alfa","model"=>"laweta"],
    ];
    echo "<pre>";
    var_dump($cars);
    echo"<br/>";
    echo "</pre>";
    $arr=[43,54,65];
    var_dump($arr);
    echo"<br/>";
    $arr[6]=43;
    var_dump($arr);
    echo"<br/>";
    $arr[]=54;
    var_dump($arr);
    echo"<br/>";
    ?>
</body>
</html>