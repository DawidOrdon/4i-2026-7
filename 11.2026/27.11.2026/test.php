<?php
session_start();
if (walid($_COOKIE['username']) === true) {
    $imie = $_COOKIE['username'];
    echo "Witaj ponownie, $imie";
} else {
    $imie = '';
}

$wydarzenia = ["Koncert" => 15, "Turniej" => 10, "KINO" => 8];
function costsum($bill, $amount)
{
    $billsum = $bill * $amount;
    return $billsum;
}

function walid($data)
{
    if (isset($data) && !empty(trim($data))) {
        return true;
    } else {
        return false;
    }
}

// $_SESSION['']
// $_POST['']
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="" method="post">

        <input type="text" name="imie" id="">


        <select name="paragon" id="">
            <?php foreach ($wydarzenia as $ewent => $cena) {
                echo "<option value=$ewent>$ewent</option>";
            }
            ?>
        </select>


        <input type="number" name="ilosc" id="">

    </form>
    </body>
    </html>

<?php
$paragon = $_POST['paragon'];
foreach ($paragon as $bilet => $ceny) {
    $costsum($ceny * $_POST['ilosc']);
}

if (walid($imie) === true) {
    cookieset('username', '$imie', time() + 60 * 60 * 24 * 3, '/');
} else {
    return 0;
}
//$_SESSION['sum']=


?>