<?php

function frequency($array){
    $arrayUnique= array_unique($array);
    $result = [];
    $cont = 0;

    foreach($arrayUnique as $unique){
        foreach($array as $element){
            if ($element == $unique){
                $cont++;
            } 
        }
        $result[$unique] = $cont;
        $cont = 0;
    }

    $max = max($result);
    $index = array_search($max, $result);
    echo "$index \n";


}


frequency([1, 4, 4, 4, 5, 3]);


?>