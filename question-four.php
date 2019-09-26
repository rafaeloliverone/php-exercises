<?php

function roatLeft($array, $rotation){

    foreach($array as $number){
        // $index = array_keys($array, $number);
        // echo 'qqqqq';
        // print_r($index);



        while ($key = array_search($number, $array) != false){
            print($key);
            // unset($duplicate[]);
        }
    
    }


}

 roatLeft([1, 2, 3, 4, 5, 4,5],4);

// $array = [1,3,6,7,8];
// $array[2] = $array[4];

// echo $array[-1];

?>