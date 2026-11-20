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
$a = 20;
$b = "20";
$c = false;
$d = array("PHP", 25, true);
$e = 12.75;
var_dump(is_int($a));
var_dump(is_string($b));
var_dump(is_bool($c));
var_dump(is_array($d));
var_dump(is_float($d));


//zad2
$urzadzenia = array(
    2 => "monitor",
    5 => "drukarka",
    8 => "router"
);
echo $urzadzenia[5];
$urzadzenia[8]="Switch";
$urzadzenia[]="Serwer";
$urzadzenia[]="access point";
unset($urzadzenia[2]);
print_r($urzadzenia);

//zad3
$uczen = array(
    "imie" => "Jan",
    "nazwisko" => "Kowalski",
    "klasa" => "3TI",
    "wiek" => 18,
    "aktywny" => true
);

echo $uczen["imie"]." ".$uczen["nazwisko"];
$uczen['klasa'] ="4TI";
$uczen['kierunek']="Technik Informatyk";
unset($uczen['aktywny']);
var_dump(is_int($uczen['wiek']));
print_r($uczen);

//zad 4
$siec = array(
    "router" => array(
        "producent" => "MikroTik",
        "ip" => "192.168.1.1"
    ),
    "switch" => array(
        "producent" => "Cisco",
        "porty" => 24
    )
);

echo $siec["router"]["producent"];
echo $siec["switch"]["porty"];
$siec["router"]["ip"]="10.0.0.1";
$siec["switch"]["zarzadzalny"]=True;
$siec["access_point"]= array(
    "producent" => "Ubiquiti",
    "pasmo" => "5 GHz"
);
var_dump(is_array($siec["router"]));
unset($siec["router"]["producent"]);
print_r($siec);

?>

</body>
</html>