<?php
include_once ("data.php");
include_once ("functions.php");
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
$flag=0;
$error=false;
if(!empty($_POST['imie'])&&strlen($_POST['imie'])>3){

}else{
    $error=true;
    echo "podaj prawidłowe imie";
}
if(!empty($_POST['produkt'])){
    foreach($produkty as $key=>$value){
        if($key==$_POST['produkt']){
            $flag=1;
        }
    }
    if ($flag==1){
        if (filter_var($_POST['ile'],FILTER_VALIDATE_INT)&&$_POST['ile']<=5&&$_POST['ile']>=1){
            $wynik = licz($produkty[$_POST['produkt']],$_POST['ile']);
            $_SESSION['koszyk'][]=['nazwa'=>$_POST['produkt'],"ile"=>$_POST['ile'],"wynik"=>$wynik];
            if(isset($_SESSION['suma'])){
                $_SESSION['suma']+=$wynik;
            }else{
                $_SESSION['suma']=$wynik;
            }
            if(!isset($_COOKIE['imie'])){
                setcookie('imie',$_POST['imie'],time()+(7*24*60*60));
            }
            header("Location:./index.php");
        }else{
            echo "podana wartość jest błędna";
        }
    }
}else{
    $error=true;
    echo "podaj produkt";
}

?>
</body>
</html>