<?php

function pairOfSock($group){
    
    $uniqueArray = array_unique($group);
    $sizeArray = sizeof($group);
    $cont = 0;
    $result = [];

    foreach($uniqueArray as $unique){
        for($i = 0; $i < $sizeArray; $i++){
            if ($unique == $group[$i]){
                $cont++;
            }
        }
        $result[$unique] = $cont;
        $cont = 0;
    }
    
    return $result;

}


function printSock($collection){

    $array = pairOfSock($collection);
    $sum = [];

    foreach($array as $key => $value){
        if ($value % 2 == 0){
            $result = $value / 2;
            $sum[] = $result;
          
        } else {
            if ($value != 1){
                $result = ($value -1) / 2;
                $sum[] = $result;
            }
        }
    }

    echo array_sum($sum);

}

printSock([1, 1, 1, 2]);


?>