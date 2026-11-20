<?php
if(!empty($_POST['test'])){
    if(strlen($_POST['test']) > 2){
        echo($_POST['test']);
    }else{
        echo "podaj conajmniej 2 znaki";
    }

}else{
    echo"brak danych";
}
