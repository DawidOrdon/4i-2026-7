<?php
include_once ("data.php");
session_start();
?>
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
    if (isset($_COOKIE['imie'])){
        echo "Witaj ponownie ".$_COOKIE['imie'];
    }
?>
<form action="./skrypt.php" method="post">
    <table>
        <tr>
            <td><label for="imie">imie</label></td>
            <td><input type="text" name="imie" id="imie" value="
            "></td>
        </tr>
        <tr>
            <td><label for="produkt">produkt</label></td>
            <td> <select name="produkt" id="produkt" style="width: 100%; text-align: center">
                    <?php
                        foreach ($produkty as $key=>$value) {
                            echo '<option value="'.$key.'">'.$key.'</option>';
                        }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td> <label for="ile">Ile</label></td>
            <td><input type="number" name="ile" id="ile"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="wyslij" style="width: 100%;"></td>
        </tr>
    </table>
</form>
<a href="./czysc.php"><button>wyczysc</button></a>
<pre>
<?php
    if(isset($_SESSION['koszyk'])){
        var_dump($_SESSION['koszyk']);
        echo $_SESSION['suma'];
    }
?>
    </pre>
</body>
</html>