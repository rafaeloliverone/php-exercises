<?php

function sumWithoutZero($number1, $number2){
    $result = $number1 + $number2;

    if ( strpos($result, '0') == true) {
        $x = str_replace("0", "", $result);
        echo $x;
        echo "\n";

    } else {
        echo $result;
        echo "\n";
    }

}

sumWithoutZero(15,8);

?>