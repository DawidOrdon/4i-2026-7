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
<a href="./page1.php" <?php echo $page == 1? "style='background-color: gray;'":""?>>page 1</a>
<a href="./page2.php" <?php echo $page == 2? "style='background-color: gray;'":""?>>page 2</a>
<a href="./page3.php" <?php echo $page == 3? "style='background-color: gray;'":""?>>page 3</a>
<a href="./page4.php" <?php echo $page == 4? "style='background-color: gray;'":""?>>page 4</a>

