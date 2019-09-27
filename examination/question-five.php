<?php

function proportion($array){
    $size = count($array);

    $positive = 0;
    $negative = 0; 
    $neutral = 0;
    $result = [];
    
    foreach($array as $number){
        if ($number < 0 ){
            $negative++;
        } else if ($number == 0){
            $neutral++;
        } else {
            $positive++;
        }
    }

    array_push($result, $negative, $neutral, $positive);

    foreach($result as $element){
        $arg = $element / $size;
        $formated = number_format($arg,6);
        echo "$formated, ";
    }
}

proportion([0,0,1,2,1,-3]);

?>
