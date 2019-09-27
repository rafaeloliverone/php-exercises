<?php

function roatLeft($array, $rotation){

        for($i = 0; $i < $rotation; $i++){
            $element = array_shift($array);
            array_push($array, $element);

            print_r($array);
       
        }
}

 roatLeft([41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51],10);

?>