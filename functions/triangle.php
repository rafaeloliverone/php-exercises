<?php

function triangleChecker($a, $b, $c){
    if ($a >= $b + $c || $b >= $a + $c || $c >= $a + $b){
        return 'None';
    } elseif ($a == $b && $b == $c){
        return 'Equilateral';
    } elseif ($a != $b && $b != $c && $a != $c){
        return 'Scalene';
    }  else {
        return 'Isosceles';
    }
}

// checking if it is equilateral
var_dump(triangleChecker(2, 2, 2));

var_dump(triangleChecker(10, 10, 10));

// checking if it is isosceles
var_dump(triangleChecker(3, 4, 4));

var_dump(triangleChecker(4, 3, 4));

var_dump(triangleChecker(4, 4, 3));

var_dump(triangleChecker(10, 10, 2));

var_dump(triangleChecker(3, 4, 5));

var_dump(triangleChecker(10, 11, 12));

var_dump(triangleChecker(5, 4, 2));

// checking if it is invalid
var_dump(triangleChecker(0, 0, 0));

var_dump(triangleChecker(3, 4, -5));

var_dump(triangleChecker(1, 1, 3));

var_dump(triangleChecker(2, 4, 2));
