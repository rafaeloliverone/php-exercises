<?php

/**
 * $operator: '+', '-', '*', '/'
 */

function calc($operand1, $operand2, $operator)
{
    if ($operator == '+'){
        return $operand1 + $operand2;
    } elseif ($operator == '-'){
        return $operand1 - $operand2;
    } elseif ( $operator == '*'){
        return $operand1 * $operand2;
    } elseif ( $operator == '/'){
        return $operand1 / $operand2;
    } else {
        return "Digite um operador aritmético válido";
    }
}

function calcWithEval($operand1, $operand2, $operator)
{
    // TODO
    // Tips echo eval('return 1+1;');
}

echo calc(2,5,'+');