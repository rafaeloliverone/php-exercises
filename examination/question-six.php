<?php 

function minMax($array){
    
    $min = min($array);
    $max = max($array);

    $resultWithoutMin = array_sum($array) - $min;
    $resultWithoutMax = array_sum($array) - $max;
    
    echo "$resultWithoutMax, $resultWithoutMin"; 

}


minMax([1,2,3,4,5]);

?>