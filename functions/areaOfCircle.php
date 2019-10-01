<?php

$pi = 3.14159265359;

function areaOfCircle($radius){
    global $pi;
    $area = $pi* $radius**2;
    return $area;
}

var_dump(areaOfCircle(10));