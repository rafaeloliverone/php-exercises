<?php

function fibonacci($number)
{
    $arr = array(0,1);
    $x = $number - count($arr);

    if ($number > 1){

        for($i = count($arr); $i <= $number; $i++){
            $arr[$i] = $arr[$i-1] + $arr[$i-2];
        }

    } elseif ($number == 0 ){
        return null;

    } else {
        return $arr[$number-1];
    }

    return $arr[$number-1];

}

// Fibonacci series

// making the 0th number
var_dump(fibonacci(0));

// making the 1st numbers
var_dump(fibonacci(1));

// making the 2nd numbers
var_dump(fibonacci(2));

// making the 4th numbers
var_dump(fibonacci(4));

// making the 6th numbers
var_dump(fibonacci(6));
