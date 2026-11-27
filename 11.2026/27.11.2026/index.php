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
<form action="" method="post">
    <input type="text" name="imie" id="">
    <input type="submit" value="szukaj">
</form>
<pre>
<?php
    if(!empty($_POST['imie'])){
        $imie = "%".$_POST['imie']."%";
    }else{
        $imie = "%";
    }
    $db = new mysqli("localhost", "root", "", "poradnia");
    $sql="SELECT * FROM pacjenci where imie like ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $imie);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo "imie: ".$row->imie."<br>";
    }
    $db->close();
    ?>
    </pre>
</body>
</html>