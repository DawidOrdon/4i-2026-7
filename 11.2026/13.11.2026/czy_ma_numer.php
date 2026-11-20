<?php
$string="lhksdajlh43iojsda";
$arr = str_split($string);
foreach ($arr as $key => $value) {
    if(is_numeric($value)){
        echo "numer na pozycji $key";
    }
}